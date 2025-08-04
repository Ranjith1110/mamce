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
                <h2 class="text-white text-center fw-bolder">Refund Policy</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Refund Policy End here -->
<section class="about-mamce">
    <div class="container">

        <div class="text-justify p-5">
            <h2 class="title">The Following parameters are Not Applicable:</h2>
            <p class="text-black">Returns, Refunds, Late or missing refunds, Sale items, Exchanges, Gifts and Shipping
            </p>
        </div>

    </div>
</section>
<!-- Refund Policy End here -->
 @endsection