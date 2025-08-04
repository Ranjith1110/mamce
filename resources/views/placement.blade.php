@extends('includes.header')
@section('content')


<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->

<!-- Container for the popup form -->
<div id="popupContainer"></div>

<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Placement</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Placement Start here -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="">
            <h2 class="title text-center d-block fw-bold mb-3 px-5 pb-2">Career And Placement</h2>
            <p class="text-justify text-black">M.A.M. College of Engineering has a full-fledged CDP department which
                seeks the
                best career prospects for the budding professionals passing out from Engineering, Management, MCA
                and the other programmes offered. The prime objective of the CDP department is to maintain strong
                Industry Institute linkage and strive for the holistic development of students & groom them suiting
                to the Industry requirements. Having benchmarked ourselves with some of the best ascendancy in our
                arena and with the strong industry patronage of our mentors, ‘Team CDP’ surges ahead in offering
                tailor-made Career development and Training interventions adapted to the needs of the student
                community of MAM.</p>
        </div>
    </div>
</div>
<!-- Placement End here -->

<!-- Career And Placement Start -->
<div class="container-fluid py-5">
    <div class="container">

        <!-- Placements 2024 -->
        <div class="">
            <h2 class="title text-center d-block fw-bold mb-3 px-5 py-2">Placements 2024</h2>
            <div class="d-flex justify-content-evenly align-items-center flex-wrap">

                <div class="text-center text-black p-2">
                    <img class="mb-3" src="{{asset('images/placements/salary.png')}}" alt="">
                    <h4 class="fs-2 fw-bold">₹ 10 LPA</h4>
                    <span>Highest Salary</span>
                </div>
                <div class="text-center text-black p-2">
                    <img class="mb-3" src="{{asset('images/placements/avg-salary.png')}}" alt="">
                    <h4 class="fs-2 fw-bold">₹ 5 LPA</h4>
                    <span>Average Salary</span>
                </div>
                <div class="text-center text-black p-2">
                    <img class="mb-3" src="{{asset('images/placements/recruiters.png')}}" alt="">
                    <h4 class="fs-2 fw-bold">7+</h4>
                    <span>Recuiters</span>
                </div>
                <div class="text-center text-black p-2">
                    <img class="mb-3" src="{{asset('images/placements/offer.png')}}" alt="">
                    <h4 class="fs-2 fw-bold">40+</h4>
                    <span>Offers</span>
                </div>
                <div class="text-center text-black p-2">
                    <img class="mb-3" src="{{asset('images/placements/placement.png')}}" alt="">
                    <h4 class="fs-2 fw-bold">80%</h4>
                    <span>Placement</span>
                </div>

            </div>
        </div>

        <!-- Placement Companies -->
        <div class="pt-5 recuiters">
            <div class="text-center">
                <h2 class="title fw-bold mb-3 px-5 py-2 rounded">Our Prominent Recruiters</h2>
            </div>
            <div class="marquee-container">
                <div class="marquee">

                    <div class="text-center text-black p-2">
                        <img class="mb-3 w-75" src="{{asset('images/placement-companys/Oracle-Academy.jpg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3 w-50" src="{{asset('images/placement-companys/RH_Academy.jpg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3 w-100" src="{{asset('images/placement-companys/omega-logo.svg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3 w-100" src="{{asset('images/placement-companys/tvs-lucas-logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3 w-50" src="{{asset('images/placement-companys/ZF_logo.svg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" width="100%" src="{{asset('images/placement-companys/Knacktech-logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" width="100%" src="{{asset('images/placement-companys/qspiders_logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" width="100%" src="{{asset('images/placement-companys/tap-logo.svg')}}" alt="">
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
<!-- Career And Placement End -->

<!-- CDP Activities Start here -->
<section id="cdp">
    <div class="container">
        <div class="text-center">
            <h2 class="text-center mb-lg-10 title fw-bold title-slogan">CDP Activities</h2>
            <h4 class="text-center mb-lg-10">Update Soon..</h4>
        </div>
    </div>
</section>
<!-- CDP Activities End here -->

@endsection