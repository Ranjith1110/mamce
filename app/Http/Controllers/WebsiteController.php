<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('index');
    }
    public function aboutMamce()
    {
        return view('about-mamce');
    }
    public function historyMamce()
    {
        return view('history-mamce');
    }
    public function adminMamce()
    {
        return view('admin-mamce');
    }
    public function campus()
    {
        return view('campus');
    }
    public function courses()
    {
        return view('courses');
    }
    public function placement()
    {
        return view('placement');
    }
    public function contact()
    {
        return view('contact');
    }


    // Departments/Ug
    public function civil()
    {
        return view('departments.ug.civil');
    }
    public function cse()
    {
        return view('departments.ug.cse');
    }
    public function eee()
    {
        return view('departments.ug.eee');
    }
    public function ece()
    {
        return view('departments.ug.ece');
    }
    public function eie()
    {
        return view('departments.ug.eie');
    }
    public function it()
    {
        return view('departments.ug.it');
    }
    public function mech()
    {
        return view('departments.ug.mech');
    }
    public function aids()
    {
        return view('departments.ug.ai&ds');
    }
    public function agri()
    {
        return view('departments.ug.agri');
    }
    public function bioMedical()
    {
        return view('departments.ug.bioMedical');
    }
    public function foodTech()
    {
        return view('departments.ug.foodTech');
    }
    public function bioTech()
    {
        return view('departments.ug.bioTech');
    }
    public function cyberSecurity()
    {
        return view('departments.ug.cyberSecurity');
    }
    public function aiml()
    {
        return view('departments.ug.ai&ml');
    }

    // Departments/Pg
    public function mba()
    {
        return view('departments.pg.mba');
    }
    public function mca()
    {
        return view('departments.pg.mca');
    }
    public function environmentalEngineering()
    {
        return view('departments.pg.environmentalEngineering');
    }
    public function meCse()
    {
        return view('departments.pg.cse');
    }
    public function meEce()
    {
        return view('departments.pg.ece');
    }
    public function ped()
    {
        return view('departments.pg.ped');
    }
    public function manufacturingEngineering()
    {
        return view('departments.pg.manufacturingEngineering');
    }
    public function research()
    {
        return view('research');
    }
    public function mandatoryDisclosure()
    {
        return view('mandatory-disclosure');
    }
    public function termsOfService()
    {
        return view('terms-of-service');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
    public function refundPolicy()
    {
        return view('cancellation-refund-policy');
    }
    public function saveAdmission(Request $request){
        
        return response()->json(['message' => 'Value saved successfully!']);

    }
    
}
