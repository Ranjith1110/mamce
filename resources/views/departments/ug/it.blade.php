@extends('includes.header')
@section('content')

<!-- Spinner Start here -->
<div id="spinner"
    class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End here -->

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
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.jpg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Information Technology</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- About Department Start here -->
<section class="about-dep">
    <div class="container">
        <!-- Slogan For Course -->
        <div class="d-flex justify-content-between align-items-center courses-btn">
            <h2 class="text-center fw-bold title-slogan">Infinite Possibilities, Endless Innovations!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in It</a>
        </div>
        <div class="mx-10 my-16">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 sidebar">
                    <ul class="p-0">
                        <li class="active text-black" data-target="about">ABOUT</li>
                        <li class="text-black" data-target="facilities">Facilities</li>
                        <li class="text-black" data-target="value-added-programmes">Value Added Programmes</li>
                        <li class="text-black" data-target="students-corner">Students' Achievements</li>
                        <li class="text-black" data-target="events">Events</li>
                        <li class="text-black" data-target="placement">Placement</li>
                        <li class="text-black" data-target="gallery">Gallery</li>
                    </ul>
                </div>

                <!-- Content -->
                <div class="col-md-10 p-4">
                    <!-- About Section -->
                    <div id="about" class="content-section">
                        <h2 class="title-slogan mb-4">About</h2>
                        <p class="text-justify text-black">
                            The department of Information Technology was established in the year 2001 to offer
                            B.Tech (Information Technology) programme with a sanctioned in-take of 40. In the year
                            2002, the sanctioned in-take became 60. Mission of the B.Tech. (IT) programme is to
                            prepare students for employment in IT related industries and / or for the pursuit of
                            advanced degrees in the faculty of Information & communication Engineering.
                            The department has an impressive band of faculty with highly qualified and experienced
                            faculty. The faculties have specialization in Networking, Algorithms, Data Mining,
                            Mobile Computing, Grid Computing, Image Processing, Software Engineering, Computer
                            graphics, Web Technology, Embedded systems, etc.
                            The department has three well equipped laboratories including a laboratory exclusively
                            for carrying out project and research activities. The students utilize these labs to
                            perform experiments prescribed for laboratories like Operating System, Networking,
                            Systems Programming Lab, Software Engineering Lab, Multimedia and Graphics Lab, DBMS,
                            etc.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To create groomed, technically competent and skilled intellectual IT professionals
                                to meet the current challenges of the modern computing industry.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <ul class="text-black">
                                <li>To uplift through advanced quality education in Information Technology</li>
                                <li>To provide an atmosphere for students and faculty for continuous learning to
                                    investigate, apply and transfer knowledge.</li>
                                <li>To provide students with the tools to become productive, participating global
                                    citizens and lifelong learners.</li>
                                <li>To provide need based quality training in the field of Information Technology
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>I- MATRIX - COMPUTER LAB 1</li>
                            <li>I-WAVES - COMPUTER LAB 2</li>
                            <li>I-BIT - COMPUTER LAB 3</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <ul class="text-black">
                            <li>FULL STACK AND WEB DEVELOPMENT</li>
                            <li>SOFT SKILLS TRAINING</li>
                            <li>INTERVIEW SKILLS TRAINING</li>
                        </ul>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>
                        <h4 class="text-center">Students' Achievements List</h4>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>EVENT NAME</th>
                                        <th>COLLEGE NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SUMITHKUMAR</td>
                                        <td>Drama solo acting</td>
                                        <td>Tiruchy enginnering college konalai</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>UMAR.M</td>
                                        <td>MELOMANIAC</td>
                                        <td>MAMCET</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SUMITHKUMAR, SAMSUDEEN, MAHALAKSHMI, AYYANAR, NAVEEN</td>
                                        <td>Short film</td>
                                        <td>MAMCET</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Yuvaraj M, Sandeep S</td>
                                        <td>Freeze the moment</td>
                                        <td>HolyCross Womens College</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Yuvaraj M</td>
                                        <td>Dumb Charads</td>
                                        <td>HolyCross Womens College</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Franklin T</td>
                                        <td>Paper Presentation</td>
                                        <td>K.Ramakrishna college of engineering</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Franklin T, Ganesamoorthy.K</td>
                                        <td>Ideathon</td>
                                        <td>M.A.M.college of engineering</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Ganesamoorthy.K</td>
                                        <td>Paper presentation</td>
                                        <td>K Ramakrishna college of engineering</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Ganesamoorthy.K</td>
                                        <td>Paper presentation</td>
                                        <td>Kongunadu college of engineering and technology</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Ganesamoorthy.K</td>
                                        <td>Paper presentation</td>
                                        <td>Kings College of engineering</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Ganesamoorthy.K</td>
                                        <td>Paper presentation</td>
                                        <td>Arunai college of engineering</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mohamed ismail.A</td>
                                        <td>Qspider</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Vedhanarayanan </td>
                                        <td>Qspider</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>
                        <ul class="text-black">
                            <li>Workshop on Machine Learning</li>
                            <li>Innovate IT</li>
                            <li>Future Script</li>
                            <li>National Science Day</li>
                        </ul>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-1.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-2.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-3.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-4.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-5.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/itImg/it-6.jpg')}}"
                                    alt="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Department End here -->

<!-- Upcoming Events Start here -->
<section id="upcoming">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">UPCOMING EVENTS</h2>
            <!-- <h4 class="mb-lg-10">Coming Soon..</h4> -->
            <h4 class="text-black">HACKATHON ON 11 th MARCH 2025</h4>
            <h4 class="text-black">WORKSHOP ON AI & ML - 8.4.25</h4>
            <h4 class="text-black">GUEST LECTURE ON GEN AI – 10.5.25</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection