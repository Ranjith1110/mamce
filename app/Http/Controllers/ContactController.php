<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactEnquiry;
use App\Models\User;
use Validator,Hash;
class ContactController extends Controller
{

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
    public function contactEnquiryView(Request $request){
            $input = $request->all();
            $id = $input['id'];
        if(session()->has('mamce_admin')){
            $contactEnquiry = ContactEnquiry::find($id);
            return view('dashboard.contact.view',compact('contactEnquiry'));
        }else{
            return redirect()->route('index');
        }
    }
    
}
