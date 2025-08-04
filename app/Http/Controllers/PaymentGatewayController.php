<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\ContactEnquiry;
use App\Models\User;
use Validator,Hash;
class PaymentGatewayController extends Controller
{
    public function __construct()
    {
        $this->merchant_reference_no    =    '965421';
     } 
    public function tutionFees(){
        return view('payment.tution-fees');
    }
    public function examFees(){
        return view('payment.exam-fees');
    }
    public function otherFees(){
        return view('payment.other-fees');
    }
    public function newAdmissionFees(){
        return view('payment.new-admission-fees');
    }
    function eazypayu_aes128Encrypt($plaintext,$key){
         $cipher = "AES-128-ECB";   
         if (strlen($key) !== 16) {
            throw new Exception("Key must be 16 bytes for AES-128 encryption.");
        }
        $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA);
        return base64_encode($ciphertext);
        
  }
    public function MakePayment(Request $request) {
        $validated = $request->validate([
                'reg_no' => 'required|min:12|max:12',
                'student_name' => 'required|min:3|max:30',
                'phone_no' => 'required|max:16', 
                'pay_for' => 'required',
                'amount' => 'required',
                'contact_email' => 'required|email',
            ]);
        if(isset($request->razorpay)){
            return redirect()->route('razorpay.insert-fees')->with(['data' => $request->all()]);
        }else{
            $validated = $request->validate([
                'reg_no' => 'required|min:12|max:12',
                'student_name' => 'required|min:3|max:30',
                'phone_no' => 'required|max:16', 
                'pay_for' => 'required',
                'amount' => 'required',
                'contact_email' => 'required|email',
            ]);
            $reg_no=$request->reg_no;
            $student_name=$request->student_name;
            $phone=$request->phone_no;
            $contact_email=$request->contact_email;
            $pay_for=$request->pay_for;
            $amount=$request->amount;    
            $merchant_id = "289028";
            $key = "2862040690205011";
            $reference_no = $reg_no."T".time(); 
            //add reference num in session
            $_SESSION['reference_no'] = $reference_no;
            $sub_merchant_id = "52631";
            $branch = "7th";
            $year = date("Y");
            //$return_url = env('APP_URL','')."/payment-success";
            $return_url = "https://www.mamce.org/payment-success";
            $paymode = "9";
            $mandatory_fields = $reference_no ."|".$sub_merchant_id ."|".$amount."|".$phone."|".$student_name."|".$reg_no."|".$branch."|".$year;
            $opt_fields = $contact_email;
            $e_sub_merchant_id = $this->eazypayu_aes128Encrypt($sub_merchant_id, $key);
            $e_reference_no = $this->eazypayu_aes128Encrypt($reference_no, $key);
            $e_amount = $this->eazypayu_aes128Encrypt($amount, $key);
            $e_return_url = $this->eazypayu_aes128Encrypt($return_url, $key);
            $e_paymode = $this->eazypayu_aes128Encrypt($paymode, $key);
            $e_mandatory_fields = $this->eazypayu_aes128Encrypt($mandatory_fields, $key);
            $e_opt_fields = $this->eazypayu_aes128Encrypt($opt_fields, $key);
            /*$plain_url='https://eazypay.icicibank.com/EazyPG?merchantid='.$merchant_id.'&mandatory fields='.$mandatory_fields.'&optional fields='.$opt_fields.'&returnurl='.$return_url.'&Reference No='.$reference_no.'&submerchantid='.$sub_merchant_id.'&transaction amount='.$amount.'&paymode='.$paymode;*/
            //Store in DB
            DB::insert('insert into smartend_all_icici_payments (payee_name, reg_no, contact_phone, contact_email, pay_for, Payment_Mode, SubMerchantId, ReferenceNo, mandatory_fields, optional_fields, payment_status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$student_name, $reg_no, $phone, $contact_email, $pay_for, $paymode, $sub_merchant_id, $reference_no, $mandatory_fields, $opt_fields, 'InProgress']);
            $redirect_url = 'https://eazypay.icicibank.com/EazyPG?merchantid='.$merchant_id.'&mandatory fields='.$e_mandatory_fields.'&optional fields='.$e_opt_fields.'&returnurl='.$e_return_url.'&Reference No='.$e_reference_no.'&submerchantid='.$e_sub_merchant_id.'&transaction amount='.$e_amount.'&paymode='.$e_paymode;
            //echo "<script>docment.cookie='cookieNumber=".$reference_no."'</script>";
            //echo "<script>window.open('".$redirect_url."','_blank')</script>";
            //return redirect($redirect_url)->withCookie($student_name);
            //return redirect($redirect_url)->withInput(Input::all())->with('message', 'Redirected');
            return redirect($redirect_url)
            ->withInput(request()->all())  // Flash input data to the session
            ->with('message', 'Redirected');
        }
    }
    public function PaymentSuccess(){
        //$request->session()->regenerate();  
        //print_r($_COOKIE);
        //echo 'Hello ' . htmlspecialchars($_COOKIE["TestCookie"]) . '!';
        //echo "<script>Cookies.get('cookieNumber');</script>"; // => 'value'
        
        //    echo "ok"; 
        
        /*if ($_SESSION['username']) {
        $reference_no=$_SESSION['reference_no'];
        echo "Hi ". $_SESSION['username'];
        echo ". ref number is ".$reference_no;
        } else {
        echo 'Session not set';
        }*/
        $reference_no=$_REQUEST['ReferenceNo'];
                $res = $_REQUEST;
                //print_r($res); 
                //$reference_no=$res['ReferenceNo'];
                if($res['Response_Code']=='E000')
                {
                 $payment_status= 'Payment Success';          
                }
            elseif ($res['Response_Code']=='E007') 
            {
                $payment_status= 'Transaction Failed';
            }elseif ($res['Response_Code']=='E00327') 
            {
                $payment_status= 'Cash Challan Generated';
            }elseif ($res['Response_Code']=='E00328') 
            {
                $payment_status= 'Cheque Challan Generated';
            }elseif ($res['Response_Code']=='E00329') 
            {
                $payment_status= 'NEFT Challan Generated';
            }
            else{
                $payment_status='Not Paid. Contact admin';
            }
            $existing = DB::table('smartend_all_icici_payments')
    ->where('ReferenceNo', $reference_no)
    ->first();
    if ($existing) {
    // Safe null handling using null coalescing operator (??)
    $affected = DB::table('smartend_all_icici_payments')
        ->where('ReferenceNo', $reference_no)
        ->limit(1)
        ->update([
            'Response_Code'         => $res['Response_Code']         ?? null,
            'Unique_Ref_Number'     => $res['Unique_Ref_Number']     ?? null,
            'Service_Tax_Amount'    => $res['Service_Tax_Amount']    ?? null,
            'Processing_Fee_Amount' => $res['Processing_Fee_Amount'] ?? null,
            'Total_Amount'          => $res['Total_Amount']          ?? null,
            'Transaction_Amount'    => $res['Transaction_Amount']    ?? null,
            'Transaction_Date'      => $res['Transaction_Date']      ?? null,
            'Interchange_Value'     => $res['Interchange_Value']     ?? null,
            'TDR'                   => $res['TDR']                   ?? null,
            'ID'                    => $res['ID']                    ?? null,
            'RS'                    => $res['RS']                    ?? null,
            'TPS'                   => $res['TPS']                   ?? null,
            'RSV'                   => $res['Response_Code']         ?? null,
            'payment_status'        => $payment_status               ?? null,
        ]);
} 
                /*$affected =DB::table('smartend_all_icici_payments')
                ->where('ReferenceNo', $reference_no)  
                ->limit(1) 
                ->update(array('Response_Code'=> $res['Response_Code'],
                'Unique_Ref_Number'=> $res['Unique_Ref_Number'],
                'Service_Tax_Amount'=> $res['Service_Tax_Amount'],
                'Processing_Fee_Amount'=> $res['Processing_Fee_Amount'],
                'Total_Amount'=> $res['Total_Amount'],
                'Transaction_Amount'=> $res['Transaction_Amount'],
                'Transaction_Date'=> $res['Transaction_Date'],
                'Interchange_Value'=> $res['Interchange_Value'],
                'TDR'=> $res['TDR'],
                'ID'=> $res['ID'],
                'RS'=> $res['RS'],
                'TPS'=> $res['TPS'],
                'RSV'=> $res['Response_Code'],
                'payment_status'=> $payment_status
                ));*/
               $_SESSION['Unique_Ref_Number']= $res['Unique_Ref_Number'];
               $_SESSION['payment_status']=$payment_status; 
        
        /**   //Send tansaction to email
        $mailid = $res['optional_fields'];
        $subject = 'MAMCE - Payment details';
        $cc = 'anbarasis35@gmail.com';
        $data = array('email' => $mailid, 'subject' => $subject, 'cc' => $cc);
        Mail::send('emails.paymentinfo', $data, function ($message) use ($data) {
        $message->from('webteam@mamce.org', 'MAMCE - Payment details');
        $message->to($data['email']);
        $message->cc($data['cc']);
        $message->subject($data['subject']); 
        }); */
        $user = DB::table('smartend_all_icici_payments')->where('ReferenceNo', $reference_no)->first();
        $_SESSION['student_name']=$user->payee_name;
                // SITE SETTINGS
                //$WebsiteSettings = Setting::find(1);
                //$site_title_var = "site_title_" . trans('backLang.boxCode');
                //$site_email = $WebsiteSettings->site_webmails;
                //$site_url = $WebsiteSettings->site_url;
                //$site_title = $WebsiteSettings->$site_title_var;
        
                $message = '';
                    $message .= '<table><tr><td style="padding: 5px">Register Number</td><td style="padding: 5px">'.$user->reg_no.'</td></tr>';
                    $message .= '<table><tr><td style="padding: 5px">Paid For</td><td style="padding: 5px">'.$user->pay_for.'</td></tr>';            
                    $message .= '<tr><td style="padding: 5px">Payment Status</td><td style="padding: 5px">'.$payment_status.'</td></tr>';
                    $message .= '<tr><td style="padding: 5px">Transaction Id</td><td style="padding: 5px">'.$res['Unique_Ref_Number'].'</td></tr>';
                    $message .= '<tr><td style="padding: 5px">Transaction Amount</td><td style="padding: 5px">'.$res['Transaction_Amount'].'</td></tr>';
                    $message .= '<tr><td style="padding: 5px">Service Tax Amount </td><td style="padding: 5px">'.$res['Service_Tax_Amount'].'</td></tr>';
                    $message .= '<tr><td style="padding: 5px">Processing Fee Amount</td><td style="padding: 5px"> '.$res['Processing_Fee_Amount'].'</td></tr>'; 
                    $message .= '<tr><td style="padding: 5px">Total Amount     </td><td style="padding: 5px">'.$res['Total_Amount'].'</td></tr>';
                    $message .= '<tr><td style="padding: 5px">Transaction Date </td><td style="padding: 5px"> '.$res['Transaction_Date'].'</td></tr></table>';
        
                // $Webmail = new Webmail;
                // $Webmail->cat_id = 0;
                // $Webmail->group_id = 4;//For Inbox Label Online Payment
                // $Webmail->title = 'Online Fee Payment';
                // $Webmail->details = $message;
                // $Webmail->date = date("Y-m-d H:i:s");
                // $Webmail->from_email = $user->contact_email;
                // $Webmail->from_name = $user->payee_name;
                // $Webmail->from_phone = $user->contact_phone;
                // $Webmail->to_email = 'accountsmamce@mamce.org';
                // $Webmail->to_name = $site_title;
                // $Webmail->status = 0;
                // $Webmail->flag = 0;
                // $Webmail->save();
                   return view('payment.payment-details', ['name' => 'James']);
        
                //$this->load->view('payment-details');
              //  return redirect('/payment-details')->with('Unique_Ref_Number', $res['Unique_Ref_Number']);
        
            }
        
    public function saveContact(Request $request){
        $input = $request->all();
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:30',
            'phone_no' => 'required|string|max:30',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        ContactEnquiry::create($validated);
        return response()->json(['message' => 'Value saved successfully!']);

    }
    public function contactEnquiryList(){
        if(session()->has('mamce_admin')){
            $contactEnquiry = ContactEnquiry::orderBy('id','desc')->paginate();
            return view('dashboard.contact.list',compact('contactEnquiry'));
        }else{
            return redirect()->route('index');
        }
    }
    public function contactEnquiryView($id){

        if(session()->has('mamce_admin')){
            $contactEnquiry = ContactEnquiry::find($id);
            return view('dashboard.contact.view',compact('contactEnquiry'));
        }else{
            return redirect()->route('index');
        }
    }
    
}
