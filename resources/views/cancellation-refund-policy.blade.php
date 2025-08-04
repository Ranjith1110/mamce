@extends('includes.header')
@section('content')

<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->



<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Cancellation Refund Policy</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Refund Policy End here -->
<section class="about-mamce">
    <div class="container">

        <div class="text-justify p-5">
            <h2 class="title">Cancellation Policy</h2>
            <p class="text-black">Course Cancellations: If a student cancels their enrollment in a course, the refund will be processed according to the refund schedule below.</p>
            <p class="text-black">Event Cancellations: If an event is canceled by MAM College of Engineering, a full refund will be processed.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">Refund Policy</h2>
            <h4>Refund Schedule</h4>
            <div class="">
                <p class="text-black ">Before Course Start Date: 100% refund</p>
                <p class="text-black">Within 7 days of Course Start Date: 50% refund</p>
            </div>
            <p class="text-black">After 7 days of Course Start Date: No refund</p>
            <p class="text-black">Refund Processing Time: Refunds will be processed within 7-10 working days of receiving the cancellation request.</p>
            <p class="text-black">Refund Method: Refunds will be made through the same payment method used for the original transaction.</p>
        </div>

        <div class="p-5">
            <h2 class="title">Refund Exceptions</h2>
            <p class="text-black text-justify">No Refund: No refund will be given if a student has already completed more than 50% of the course.</p>
            <p class="text-black text-justify">Partial Refund: A partial refund may be given if a student has completed less than 50% of the course.</p>
        </div>

        <div class="p-5">
            <h2 class="title">Contact Information</h2>
            <p class="text-black text-justify">Contact Us: For any questions or concerns about our cancellation and refund policy, please contact us at +91 80152 11313.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">Payment Gateway Terms</h2>
            <p class="text-black">Razorpay Terms: Our payment gateway is powered by Razorpay. By making a payment, you agree to Razorpay's terms and conditions.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">Changes to Policy</h2>
            <p class="text-black">Policy Updates: MAM College of Engineering reserves the right to update this cancellation and refund policy at any time. Changes will be effective immediately and will be posted on our website. [1]</p>
        </div>

    </div>
</section>
<!-- Refund Policy End here -->
@endsection