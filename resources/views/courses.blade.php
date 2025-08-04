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
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Courses</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Courses Start here -->
<section id="courses">
    <div class="container-fluid">

        <div class="py-lg-10 py-md-8 py-6 text-center">
            <h2 class="text-center mb-lg-10 title">Courses</h2>

            <div class="row g-lg-0 px-lg-0 px-md-0 px-5 gap-lg-3 gap-0 justify-content-center">

                <div class="text-center">
                    <p style="background-color: #9d7651;" class="h4 d-inline-block p-2 fw-bold text-white rounded">
                        UG Courses</p>
                </div>

                <a href="{{route('civil')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/civil engineering.png')}}"
                            alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Civil Engineering</h5>
                    </div>
                </a>

                <a href="{{route('cse')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/cse.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Computer Science & Engineering</h5>
                    </div>
                </a>

                <a href="{{route('eee')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/eee.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Electrical & Electronics Engineering</h5>
                    </div>
                </a>

                <a href="{{route('ece')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/ece.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Electronics & Communication Engineering
                        </h5>
                    </div>
                </a>

                <a href="{{route('eie')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/eie.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Electronics & Instrumentation Engineering
                        </h5>
                    </div>
                </a>

                <a href="{{route('it')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/information-technology .png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Information Technology</h5>
                    </div>
                </a>

                <a href="{{route('mech')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/mechanical-engineering.png')}}"
                            alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Mechanical Engineering</h5>
                    </div>
                </a>

                <a href="{{route('ai&ds')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/ai&ds.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Artificial intelligence & Data Science
                        </h5>
                    </div>
                </a>

                <a href="{{route('agri')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid"
                            src="{{asset('images/courses-img/pg-icons/smart-agriculture.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Agricultural Engineering</h5>
                    </div>
                </a>

                <a href="{{route('bioMedical')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/bme-logo.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Bio-Medical Engineering</h5>
                    </div>
                </a>

                <a href="{{route('foodTech')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/food-technology.png')}}"
                            alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Food Technology</h5>
                    </div>
                </a>

                <a href="{{route('bioTech')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/bio-technology.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Bio Technology</h5>
                    </div>
                </a>

                <a href="{{route('cyberSecurity')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/cyber security.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Cyber Security</h5>
                    </div>
                </a>

                <a href="{{route('ai&ml')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/pg-icons/ai&ml.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Artificial Intelligence & Machine
                            Learning</h5>
                    </div>
                </a>

                <div class="text-center my-5">
                    <p style="background-color: #9d7651;" class="h4 d-inline-block p-2 fw-bold text-white rounded">
                        PG Courses</p>
                </div>

                <a href="{{route('mba')}}"
                    class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8 mocha-card">
                        <img class="img-fluid"
                            src="{{asset('images/courses-img/ug-icons/master-of-business-administration.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Master of Business Administration</h5>
                    </div>
                </a>

                <a href="{{route('mca')}}" class="col-lg-3 col-md-6 mb-4 courses-item text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid"
                            src="{{asset('images/courses-img/ug-icons/master-of-computer-applications.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Master of Computer Applications</h5>
                    </div>
                </a>

                <a href="{{route('environmentalEngineering')}}" class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid"
                            src="{{asset('images/courses-img/ug-icons/engev.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Environmental Engineering</h5>
                    </div>
                </a>

                <a href="{{route('mecse')}}" class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/ug-icons/cse.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Computer Science & Engineering</h5>
                    </div>
                </a>

                <a href="{{route('meece')}}" class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/ug-icons/ece.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Electronics & Communication Engineering
                        </h5>
                    </div>
                </a>

                <a href="{{route('ped')}}" class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid" src="{{asset('images/courses-img/ug-icons/ped.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Power Electronics & Drives</h5>
                    </div>
                </a>

                <a href="{{route('manufacturingEngineering')}}" class="col-lg-3 col-md-6 mb-4 courses-item bg-white text-decoration-none">
                    <div style="background-color: #dfcfc1;"
                        class="position-relative d-flex gap-4 align-items-center p-8">
                        <img class="img-fluid"
                            src="{{asset('images/courses-img/ug-icons/manufacturing-engineering.png')}}" alt="">
                        <h5 class="text-start text-black fs-5 fw-bold m-0">Manufacturing Engineering</h5>
                    </div>
                </a>

            </div>
        </div>

    </div>
</section>
<!-- Courses End here -->

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