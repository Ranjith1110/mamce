<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AdmissionEnquiry;
use App\Models\User;
use Validator,Hash;
class AdmissionController extends Controller
{

    public function saveAdmission(Request $request){
        $input = $request->all();
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:30',
            'phone_no' => 'required|string|max:30',
            'address' => 'required|string|max:30',
            'course_type' => 'required|string|max:30',
            'course' => 'required|string|max:155',
        ]);
        AdmissionEnquiry::create($validated);
        return response()->json(['message' => 'Value saved successfully!']);

    }
    public function login(Request $request){
        $input = $request->all();
        if(session()->has('mamce_admin')){
            return redirect()->route('mamce.admission_enquiry_list');
        }
        if(empty($input)){
            return view('login');
        }else{
            $rules = array(
                'email' => 'required',
                'password' => 'required'
            );
            // Passing input with defined rules through validator class
            $validation = Validator::make($input, $rules);
            
            //if validation passes
            if ($validation->passes())
            {
                $user = User::where('email',$request->email)->first();
                if($user){
                    if(Hash::check($input['password'], $user->password)){
                        session()->put('mamce_admin', $user);
                        return redirect()->route('mamce.admission_enquiry_list')->with('success', 'Your have successfully logged in.');

                    }else{
                        // return back to previous page with errors
                        return back()->withInput($request->all())->with('error', 'Password is incorrect.');
                    }
                }else{
                    // return back to previous page with errors
                    return back()->withInput($request->all())->with('error', 'Username is incorrect.');
                } 
            }else{
                // return back to previous page with errors
                return back()->withInput($request->all())->withErrors($validation->errors()->first());
            }
        }
    }
    public function logout(){
        session()->flush();
        //redirect to login
        return redirect()->route('index')->with('success', 'You are logged out successfully.');
    }
    public function admissionEnquiryList(Request $request){
        $from_date = $_GET['from_date'] ?? '';
        $to_date = $_GET['to_date'] ?? '';
        if(session()->has('mamce_admin')){
            $admissionEnquiry = AdmissionEnquiry::orderBy('id','desc');
            if(!empty($from_date) && !empty($to_date)){
                $admissionEnquiry->whereBetween('created_at',[$from_date ." 00:00:00",$to_date ." 23:59:59"]);
            }
            $admissionEnquiry = $admissionEnquiry->paginate();
            return view('dashboard.admission.list',compact('admissionEnquiry','from_date','to_date'));
        }else{
            return redirect()->route('index');
        }
    }
    public function admissionEnquiryView(Request $request){
        $input = $request->all();
        $id = $input['id'];
        if(session()->has('mamce_admin')){
            $admissionEnquiry = AdmissionEnquiry::find($id);
            return view('dashboard.admission.view',compact('admissionEnquiry'));
        }else{
            return redirect()->route('index');
        }
    }
    
}
