<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Carbon\Carbon;
use App\Models\PaymentTransactions;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Validator,DB,PDF;
use DateTime,DateTimeZone,Mail;
class Razorpay extends Controller
{
    public function razorpay_index(Request $request)
    {        
        $input = $request->all();
        //validation rules
        $rules = array(
                    'tkn'=>'required|exists:payment_transactions,txn_token'
                );
        //validate input
        $validation = Validator::make($input,$rules);            
        if($validation->fails()){
            return redirect(route('razorpay.token-expired'));
        }
       //echo  'key->'.config('app.RAZORPAY_KEY'); die;
       // dd((env("RAZORPAY_KEY", "somedefaultvalue").'--------'.env("RAZORPAY_SECRET", "somedefaultvalue")));
 
        $key= config('app.RAZORPAY_KEY');
        $keysecret= config('app.RAZORPAY_SECRET');
        $dt=Carbon::now();
        
        //check if oken expired
        $payment = PaymentTransactions::where('txn_token',$input['tkn'])->first();
        if($dt->format('Y-m-d H:i:s')>=$payment->txn_token_expiry){
            return redirect(route('payumoney.token-expired'));
        }        
        $post_data=json_decode($payment->posted_data,true);
        
        $amount =$payment->amount;
        $post_data['amount'] = $payment->amount;
        // dd($amount);
        $post_data['txnid'] = $payment->txnid;
        // $post_data['key'] = config('customvar.payu_money_key');
        // $post_data['service_provider'] = 'payu_paisa';
        $post_data['udf1'] = $payment->id;
        $post_data['firstname'] = 'test';

        //get user info
        //$user_id = $payment->user_id;
        //$userinfo = User::find($user_id);

        // return $payment->id;
        // start
        $api = new Api (config('app.RAZORPAY_KEY'), config('app.RAZORPAY_SECRET'));
        //Amount multiply into 100 because of INR
        $res = $api->order->create(array('receipt' => '234', 'amount' => $amount*100, 'currency' => 'INR', 'notes'=> $post_data));
        // ('receipt' => '123', 'amount' => 100, 'currency' => 'INR', 'notes'=> array('key1'=> 'value3','key2'=> 'value2')
        $orderid = $res->id;
        // ends



        if(isset($post_data['firstname']) && $post_data['firstname'] == '' && $payment->user_id!=0){
            $post_data['firstname'] = $userinfo->firstname;
        }

        foreach($_POST as $key => $value) {    
            $post_data[$key] = $value;
        }
        
        return view('payment.payment',compact('post_data','orderid','amount','key','keysecret'));    
    }
    public function razorpay_payment(Request $request) {
        $input = $request->all();
        $api = new Api (config('app.RAZORPAY_KEY'), config('app.RAZORPAY_SECRET'));
        // $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                if(isset($response->order_id) && $response->order_id != ''){
                    $udf1 =  $response->notes->udf1;
                    $input['udf1'] = $udf1;

                    



                    //other code

                    $payment = PaymentTransactions::find($udf1);
                    if(!$payment){
                        return redirect(route('payumoney.token-expired'));
                    }
                    $payment->status=1;
                    $payment->status_str= $response->status;
                    // $payment->status_cat_str=$input['unmappedstatus'];
                    $responded_json = json_encode($response);
                    $payment->responded_data=json_encode($response);            
                    $payment->txn_token=NULL;
                    $payment->txn_token_expiry=Carbon::now();
                    $payment->updated_at=Carbon::now();
                    // $payment->payment_gateway = 2;
                    $payment->update();

                    return $this->razorpay_success($input);

             
                }



            } catch(Exceptio $e) {
                // return $e->getMessage();
                return response()->json(array('success'=>1,'statusCode'=>400,'msg'=> $e->getMessage()), 400);
                // return redirect()->back();
            }
        }
        return response()->json(array('success'=>1,'statusCode'=>200,'msg'=>'Payment Successful','data'=>$response), 200);
        //return redirect()->back();
    }

    //
    public static function razorpay_success($input){
        try{
            //inputs
           // $input = $request->all();
            $env  = config('app.env');
            $payment = PaymentTransactions::find($input['udf1']);
            if(!$payment){
                return redirect(route('payumoney.token-expired'));
            }
           
            // $payment->status=1;
            // $payment->status_str=1;
            // $payment->status_cat_str=$input['unmappedstatus'];
            // $responded_json = json_encode($input);
            // $payment->responded_data=json_encode($input);            
            // $payment->txn_token=NULL;
            // $payment->txn_token_expiry=Carbon::now();
            // $payment->updated_at=Carbon::now();
            // $payment->update();
            switch ($payment->type){
                case 6:
                    $studentinfo = StudentDetail::where('user_id',$payment->user_id)->first();
                    $studentinfo->admission_status = '1';
                    $studentinfo->update();
                    break;
                case 7:
                    $mdata = json_decode($payment->posted_data);
                    $tie = ConsultantRequests::find($mdata->rid);
                    $tie->allow_admissions = '1';
                    $tie->update();

                    break;
                case 8:
                    $mdata = json_decode($payment->posted_data);
                    $studentFees = FeesAssignStudents::find($mdata->fees_assign_student_id);
                    $studentFees->status = '1';
                    $studentFees->update();

                    break;
                case 11:
                    $mdata = json_decode($payment->posted_data);
                    $studentFees = StudentDetail::where('user_id',$mdata->student_id)->first();
                    $studentFees->admission_status = '1';
                    $studentFees->update();

                        break;
                    # Consultation Plan
            }

            return response()->json(array('success'=>1,'statusCode'=>200,'msg'=>'Payment Successful','data'=>$payment), 200);
        }catch(Exception $e){
            return response()->json(array('error'=>1,'statusCode'=>500,'msg'=>'failed'), 200);
        }
    }
    

    public function insertFees(Request $request){
        try{
            $data = session('data');
           
            $input = $request->all();
            // dd($input);
            $input['type'] = 7;
            
            
            $input['payment_gateway'] = 0;
            $input['amount'] = $data['amount'];
            $date = new DateTime();
            $aa = $date->modify("1 hours");
            $input['txn_token_expiry'] = $aa;
            $branchid = 6;
            $amount = $data['amount'];
            $regno = $data['reg_no'];
            $input['reg_no'] = $data['reg_no'];
            $input['pay_for'] = $data['pay_for'];
            $payment_status=2;
            // $branch_data = UserDetail::where('id',$)->first();
            $input['txnid'] = PaymentTransactions::generateTxnid($regno);
            $input['txn_token'] = PaymentTransactions::generateToken($regno.'5');

            $input['posted_data'] = '{"regno":"'.$data['reg_no'].'","fess_type":"'.$data['pay_for'].'"}';
            $input['responded_data'] = json_encode($input);
            $input['txn_token_expiry'] = $input['txn_token_expiry']->format('Y-m-d H:i:s');

            $payment = PaymentTransactions::create($input);
            $data['payment_url'] = route('razorpay.index').'?tkn='.$input['txn_token'];

            return redirect( $data['payment_url'] );
            return response()->json(array('success'=>1,'statusCode'=>200,'msg'=>'success','data'=>$input), 200);        
        }catch(Exception $e){
            return response()->json(array('error'=>1,'statusCode'=>500,'msg'=>'failed'), 200);
        }
    }    

    public function tokenExpired(Request $request){
        try{
            //inputs
            $input = $request->all();
            return view('payment.token-expired');            
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
