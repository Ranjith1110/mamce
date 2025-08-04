@extends('includes.header')
@section('content')

<style>
    .passport-img {
        width: 130px;
        /* Adjust size as needed */
        height: auto;
        margin: 0 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }
</style>

<header id="home">
    <div class="container-fluid p-0">
        <video class="w-100 vh-100 object-fit-cover" width="100%" src="{{asset('MAMCE.mp4')}}" autoplay muted
            loop></video>
    </div>
</header>

<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->

<!-- About Mamce Start here -->
<section id="about">
    <div class="container">
        <div class="pt-20">
            <div class="text-center">
                <h2 class="text-center mb-lg-10 title">About MAMCE</h2>
            </div>
            <div class="row gap-10 gap-lg-0">
                <div class="col-12 col-lg-6 mt-lg-10 mt-md-0 mt-0">
                    <div class="shadow p-4 rounded text-justify">
                        <p class="text-black"><span class="fw-bold" style="color: #9d7651;">M.A.M. College of
                                Engineering, Tiruchirappalli</span>
                            is
                            approved by the AICTE, New Delhi, and
                            affiliated to Anna University, Chennai. The college is an ISO 9001-2008 certified
                            institution and offers 14 Under Graduate and 7 Post Graduate programmes in the domains
                            of
                            Engineering, Management, and Computer Applications. All departments have been recognized
                            as
                            Research Centres by Anna University, Chennai and the Institute has the facility for
                            pursuing
                            doctoral work in the same.</p>
                        <p class="text-black"><span class="fw-bold" style="color: #9d7651;">Vision :</span> To
                            Develop a World Class Engineering
                            Institution Producing Competent Professionals.</p>
                        <p class="text-black"><span class="fw-bold" style="color: #9d7651;">Mission :</span> To
                            Blend Rigorous Academics With
                            Innovative Approaches Under A Sustainable Ambience To Produce Competent Professionals.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img width="65%" src="{{asset('images/28-logoo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Mamce Start here -->

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

<!-- Facilities Start -->
<div class="container-fluid facilities py-5">
    <div class="container py-5">
        <div class="text-center">

            <h2 class="d-inline-block fw-bold mb-3 px-5 py-2"
                style="color: #9d7651; border-radius: 4px;">Facilities</h2>

        </div>
        <div class="row g-1">

            <div class="col-lg-5 pt-3 px-3 d-lg-block d-none">
                <div class="p-1 shadow rounded" style="background-color: #dfcfc1; border: 1px solid #9d7651;">
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
                <div class="text-black py-8 pe-2 rounded"
                    style="background-color: #dfcfc1; border: 1px solid #9d7651;">
                    <ul>
                        <li class="mb-2">COLLEGE HOSTEL</li>
                        <li class="mb-2">TRANSPORT FACILITY</li>
                        <li class="mb-2">CAFETERIA</li>
                        <li class="mb-2">LIBRARY & INFORMATION CENTER</li>
                        <li class="mb-2">LIBRARY</li>
                        <li class="mb-2">COLLEGE CANTEEN</li>
                        <li class="mb-2">INTERNET CENTRE</li>
                        <li class="mb-2">PLAY GROUND</li>
                        <li class="mb-2">AUDIO VISUAL FACILITY</li>
                        <li class="mb-2">SEMINAR HALL</li>
                        <li class="">MULTIPURPOSE HALL</li>
                    </ul>
                    <!-- <p>COLLEGE HOSTEL</p>
                    <p>TRANSPORT FACILITY</p>
                    <p>CAFETERIA</p>
                    <p>LIBRARY & INFORMATION CENTER</p>
                    <p>COLLEGE CANTEEN</p>
                    <p>INTERNET CENTRE</p>
                    <p>PLAY GROUND</p>
                    <p>AUDIO VISUAL FACILITY</p>
                    <p>SEMINAR HALL</p>
                    <p>MULTIPURPOSE HALL</p> -->
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

<!-- Career And Placement Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <!-- Content for Placement -->
        <div class="py-5">
            <h2 class="title text-center d-block fw-bold mb-3 px-5 py-2">Career And Placement</h2>
            <p class="text-justify">M.A.M. College of Engineering has a full-fledged CDP department which seeks the
                best career prospects for the budding professionals passing out from Engineering, Management, MCA
                and the other programmes offered. The prime objective of the CDP department is to maintain strong
                Industry Institute linkage and strive for the holistic development of students & groom them suiting
                to the Industry requirements. Having benchmarked ourselves with some of the best ascendancy in our
                arena and with the strong industry patronage of our mentors, ‘Team CDP’ surges ahead in offering
                tailor-made Career development and Training interventions adapted to the needs of the student
                community of MAM.</p>
            <div class="text-center">
                <a href="{{'placement'}}" class="btn text-white text-center py-3 fs-6"
                    style="background-color: #9d7651;">Explore More</a>
            </div>
        </div>

        <!-- Placements 2024 -->
        <div class="py-5">
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
                        <img class="mb-3" src="{{asset('images/placement-companys/Oracle-Academy.jpg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/RH_Academy.jpg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/omega-logo.svg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/tvs-lucas-logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/ZF_logo.svg')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/Knacktech-logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/qspiders_logo.png')}}" alt="">
                    </div>
                    <div class="text-center text-black p-2">
                        <img class="mb-3" src="{{asset('images/placement-companys/tap-logo.svg')}}" alt="">
                    </div>


                </div>
            </div>
        </div>
        <!-- Career And Placement End -->
    </div>
</div>

<!-- Get More Info Start here -->
<section id="info">
    <div class="container-fluid bg-black">
        <div class="py-lg-10 py-md-8 py-6 text-center">
            <h2 class="text-center mb-lg-10 title">Get More Info</h2>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                    <div class="campus-item position-relative h-100">
                        <div class="campus-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                                <img class="img-fluid" src="{{asset('images/info/administration.jpg')}}" alt="Icon">
                            </div>
                            <h5 class="mb-2 fs-3 fw-bold text-black">Administration</h4>
                        </div>
                        <a class="fw-medium text-white" href="{{route('adminMamce')}}">
                            <div class="campus-btn rounded-0 rounded-bottom">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                    <div class="campus-item position-relative h-100">
                        <div class="campus-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                                <img class="img-fluid" src="{{asset('images/info/courses.jpg')}}" alt="Icon">
                            </div>
                            <h5 class="mb-2 fs-3 fw-bold text-black">Courses</h4>
                        </div>
                        <a class="fw-medium text-white" href="{{route('courses')}}">
                            <div class="campus-btn rounded-0 rounded-bottom">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                    <div class="campus-item position-relative h-100">
                        <div class="campus-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                                <img class="img-fluid" src="{{asset('images/info/campus.jpg')}}" alt="Icon">
                            </div>
                            <h5 class="mb-2 fs-3 fw-bold text-black">Campus</h4>
                        </div>
                        <a class="fw-medium text-white" href="{{route('campus')}}">
                            <div class="campus-btn rounded-0 rounded-bottom">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                    <div class="campus-item position-relative h-100">
                        <div class="campus-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                                <img class="img-fluid" src="{{asset('images/info/research.jpg')}}" alt="Icon">
                            </div>
                            <h5 class="mb-2 fs-3 fw-bold text-black">Research</h4>
                        </div>
                        <a class="fw-medium text-white" href="#">
                            <div class="campus-btn rounded-0 rounded-bottom">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Get More Info End here -->

<!-- Upcoming Events Start here -->
<!-- <section id="upcoming">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">UPCOMING EVENTS</h2>
            <h4 class="mb-lg-10">Coming Soon..</h4>
        </div>
    </div>
</section> -->
<!-- Upcoming Events End here -->

<!-- Rank Holders Start here -->
<!-- <section id="rank-holder">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">Rank Holders</h2>
            <marquee behavior="scroll" direction="left" scrollamount="10">
                <img class="passport-img" src="{{asset('images/info/administration.jpg')}}" alt="Passport 1">
                <img class="passport-img" src="{{asset('images/info/administration.jpg')}}" alt="Passport 2">
                <img class="passport-img" src="{{asset('images/info/administration.jpg')}}" alt="Passport 3">
                <img class="passport-img" src="{{asset('images/info/administration.jpg')}}" alt="Passport 4">
            </marquee>
        </div>
    </div>
</section> -->
<!-- Rank Holders End here -->
@endsection