<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/dashboard-list', function () {
    return view('dashboard.list');
});

Route::get('/dashboard-view', function () {
    return view('dashboard.view');
});



// Admission Enquiry From
// Route::post('/admission-enquiry', function (Request $request) {
//     return back()->with('success', 'Enquiry submitted successfully!');
// })->name('admission.enquiry');
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // Public routes
    Route::match(['get', 'post'], 'login', ['as' => 'mamce.login', 'uses' => 'AdmissionController@login']);
    Route::match(['get', 'post'], 'logout', ['as' => 'mamce.logout', 'uses' => 'AdmissionController@logout']);

    // Routes accessible only when logged in
    Route::get('admission-list', ['as' => 'mamce.admission_enquiry_list', 'uses' => 'AdmissionController@admissionEnquiryList']);
    Route::get('admission-view/', ['as' => 'mamce.admission_enquiry_view', 'uses' => 'AdmissionController@admissionEnquiryView']);
    Route::get('contact-list', ['as' => 'mamce.contact_enquiry_list', 'uses' => 'ContactController@contactEnquiryList']);
    Route::get('contact-view/', ['as' => 'mamce.contact_enquiry_view', 'uses' => 'ContactController@contactEnquiryView']);

    
});
Route::group(array('namespace' => 'App\Http\Controllers'), function () {
    Route::get('/', array('as' => 'index',  'uses' => 'WebsiteController@index'));
    
    Route::post('admission-enquiry', array('as' => 'admission.enquiry',  'uses' => 'AdmissionController@saveAdmission'));
    Route::post('contact-enquiry', array('as' => 'contact.enquiry',  'uses' => 'ContactController@saveContact'));
    //Route::match(['get', 'post'],'login', array('as' => 'mamce.login',  'uses' => 'AdmissionController@login'));


    Route::get('about-mamce', array('as' => 'aboutMamce',  'uses' => 'WebsiteController@aboutMamce'));
    Route::get('history-mamce', array('as' => 'historyMamce',  'uses' => 'WebsiteController@historyMamce'));
    Route::get('admin-mamce', array('as' => 'adminMamce',  'uses' => 'WebsiteController@adminMamce'));
    Route::get('campus', array('as' => 'campus',  'uses' => 'WebsiteController@campus'));
    Route::get('courses', array('as' => 'courses',  'uses' => 'WebsiteController@courses'));
    Route::get('placement', array('as' => 'placement',  'uses' => 'WebsiteController@placement'));
    Route::get('contact', array('as' => 'contact',  'uses' => 'WebsiteController@contact'));
    Route::get('mandatory-disclosure', array('as' => 'mandatoryDisclosure',  'uses' => 'WebsiteController@mandatoryDisclosure'));
    Route::get('research', array('as' => 'research',  'uses' => 'WebsiteController@research'));
    Route::get('terms-of-service', array('as' => 'termsOfService',  'uses' => 'WebsiteController@termsOfService'));
    Route::get('privacy-policy', array('as' => 'privacyPolicy',  'uses' => 'WebsiteController@privacyPolicy'));
    Route::get('cancellation-and-refund-policy', array('as' => 'refundPolicy',  'uses' => 'WebsiteController@refundPolicy'));
    //Payment Route
    Route::get('tution-fees', array('as' => 'tutionFees',  'uses' => 'PaymentGatewayController@tutionFees'));
    Route::get('exam-fees', array('as' => 'examFees',  'uses' => 'PaymentGatewayController@examFees'));
    Route::get('other-fees', array('as' => 'otherFees',  'uses' => 'PaymentGatewayController@otherFees'));
    Route::get('new-adminssion-fees', array('as' => 'newAdmissionFees',  'uses' => 'PaymentGatewayController@newAdmissionFees'));
    Route::post('/online/submit', array('as' => 'payment-submit', 'uses' => 'PaymentGatewayController@MakePayment'));
    Route::match(['get', 'post'],'/payment-success', array('as' => 'payment-success', 'uses' => 'PaymentGatewayController@PaymentSuccess'));

    Route::get('razorpay_index', array('as' => 'razorpay.index', 'uses' => 'Razorpay@razorpay_index'));
    Route::get('/insert-fees', array('as' => 'razorpay.insert-fees', 'uses' => 'Razorpay@insertFees'));
    Route::post('razorpay-payment', array('as' => 'razorpay.payment', 'uses' => 'Razorpay@razorpay_payment'));
    Route::get('token-expired', array('as' => 'razorpay.token-expired', 'uses' => 'Razorpay@tokenExpired'));

    // Departments/Ug
    Route::get('civil-engineering', array('as' => 'civil',  'uses' => 'WebsiteController@civil'));
    Route::get('computer-science-engineering', array('as' => 'cse',  'uses' => 'WebsiteController@cse'));
    Route::get('electrical-electronics-engineering', array('as' => 'eee',  'uses' => 'WebsiteController@eee'));
    Route::get('electronics-communication-engineering', array('as' => 'ece',  'uses' => 'WebsiteController@ece'));
    Route::get('electronics-instrumentation-engineering', array('as' => 'eie',  'uses' => 'WebsiteController@eie'));
    Route::get('information-technology', array('as' => 'it',  'uses' => 'WebsiteController@it'));
    Route::get('mechanical-engineering', array('as' => 'mech',  'uses' => 'WebsiteController@mech'));
    Route::get('artificial-intelligence-and-data-science', array('as' => 'ai&ds',  'uses' => 'WebsiteController@aids'));
    Route::get('agricultural-engineering', array('as' => 'agri',  'uses' => 'WebsiteController@agri'));
    Route::get('bio-medical-engineering', array('as' => 'bioMedical',  'uses' => 'WebsiteController@bioMedical'));
    Route::get('food-technology', array('as' => 'foodTech',  'uses' => 'WebsiteController@foodTech'));
    Route::get('bio-technology', array('as' => 'bioTech',  'uses' => 'WebsiteController@bioTech'));
    Route::get('cyber-security', array('as' => 'cyberSecurity',  'uses' => 'WebsiteController@cyberSecurity'));
    Route::get('artificial-intelligence-and-machine-learning', array('as' => 'ai&ml',  'uses' => 'WebsiteController@aiml'));

    // Departments/Pg
    Route::get('pg-master-of-business-administration', array('as' => 'mba',  'uses' => 'WebsiteController@mba'));
    Route::get('pg-master-of-computer-applications', array('as' => 'mca',  'uses' => 'WebsiteController@mca'));
    Route::get('pg-environmental-engineering', array('as' => 'environmentalEngineering',  'uses' => 'WebsiteController@environmentalEngineering'));
    Route::get('pg-computer-science-engineering', array('as' => 'mecse',  'uses' => 'WebsiteController@meCse'));
    Route::get('pg-electronics-communication-engineering', array('as' => 'meece',  'uses' => 'WebsiteController@meEce'));
    Route::get('pg-power-electronics-and-drives', array('as' => 'ped',  'uses' => 'WebsiteController@ped'));
    Route::get('pg-manufacturing-engineering', array('as' => 'manufacturingEngineering',  'uses' => 'WebsiteController@manufacturingEngineering'));
});
