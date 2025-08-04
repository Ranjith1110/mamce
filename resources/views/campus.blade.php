@extends('includes.header')
@section('content')

<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->



<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Campus</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Facilities Start -->
<div class="text-center">
    <h2 class="text-white mb-3 px-5 py-2 title" style="color: #9d7651 !important;">Facilities</h2>
</div>
<div class="container-fluid facilities py-5">
    <div class="container py-5">
        <div class="row g-1">

            <div class="col-lg-5 pt-3 px-3 d-lg-block d-none">
                <div class="p-1 shadow bg-white rounded">
                    <div class="p-2">
                        <div class="row g-2">
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lab-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lab-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lab-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lab-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/abdulKalam-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/abdulKalam-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 pt-3">
                <div class="text-black text-center py-10 rounded"
                    style="background-color: #dfcfc1; border: 1px solid #9d7651;">
                    <p>COLLEGE HOSTEL</p>
                    <p>TRANSPORT FACILITY</p>
                    <p>CAFETERIA</p>
                    <p>LIBRARY & INFORMATION CENTER</p>
                    <p>COLLEGE CANTEEN</p>
                    <p>INTERNET CENTRE</p>
                    <p>PLAY GROUND</p>
                    <p>AUDIO VISUAL FACILITY</p>
                    <p>SEMINAR HALL</p>
                    <p>MULTIPURPOSE HALL</p>
                </div>
            </div>

            <div class="col-lg-5 pt-3 px-3 d-lg-block d-none">
                <div class="p-1 shadow rounded" style="background-color: #dfcfc1;">
                    <div class="p-2">
                        <div class="row g-2">
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lib-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lib-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/lib-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/edisonHall-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/edisonHall-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6"><img class="img-fluid" src="{{asset('images/facilitiesImg/backetball-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Facilities End -->

<!-- Upcoming Events Start here -->
<section id="upcoming">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">UPCOMING EVENTS</h2>
            <h4 class="mb-lg-10">Coming Soon..</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->
@endsection