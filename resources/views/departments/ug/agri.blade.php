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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/agriImg/agri-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Agricultural Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">Cultivate your future with Agricultural Engineering!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in AGRI</a>
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
                            The department Agriculture Engineering at this institution was established in 2020, has
                            an intake 40 students. Agriculture Engineering is a field of engineering that focuses on
                            the design, construction and improvement of farming equipment and machinery. The
                            department offers hands on training for students from first year onwards on the latest
                            agricultural engineering technologies. The department accommodate outcome-based
                            education which helps the students to learn, develop and serve to the society.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To inculcate competency in the field of Agricultural Engineering in rural regime by
                                promoting science based agricultural practices for the betterment of the society.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                To engage the students in academic as well as scholarly activities, which strengthen
                                the department reputation in global market.
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Post Harvest Laboratory</li>
                            <li>Renewable Energy Laboratory</li>
                            <li>Irrigation Field Laboratory</li>
                            <li>Farm equipment and machinery laboratory</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <ul class="text-black">
                            <li>Robotics and AI in Agriculture with major emphasis of food crops by Institution of
                                Engineers on oct 22 and 23-2024</li>
                            <li>Presentation day held on 03-09-2024</li>
                            <li>One day Demonstration of modelling and Analysis software on 31.08.2024</li>
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
                                        <td>DHARSHINI P</td>
                                        <td> PAPER PRESNTATION</td>
                                        <td>AMS COLLEGE , NAMAKAL</td>
                                        <td>SECOND PRIZE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SANDHIYA K</td>
                                        <td> PAPER PRESNTATION</td>
                                        <td>AMS COLLEGE , NAMAKAL</td>
                                        <td>SECOND PRIZE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AMANULLA</td>
                                        <td>Foot ball match,zone 14</td>
                                        <td>SRM college of engineering, trichy</td>
                                        <td>Third Prize</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>RAJAVARMAN R</td>
                                        <td>Ball badmiton, zone 40</td>
                                        <td>SRM college of engineering, trichy</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>BHUVANESHWARAN</td>
                                        <td>Running ,zone 14,1500m</td>
                                        <td>Kongu Nadu college,Namakal</td>
                                        <td>First prize</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>BHUVANESHWARAN</td>
                                        <td>Running,zone 14,800m</td>
                                        <td>Kongu Nadu college,Namakal</td>
                                        <td>Second prize</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>BHUVANESHWARAN</td>
                                        <td>Relay ,400m</td>
                                        <td>Kongu Nadu college,Namakal</td>
                                        <td>Second prize</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Hema, Keerthana</td>
                                        <td>Technical Quiz</td>
                                        <td>Kongunadu College of Engineering and Technology</td>
                                        <td>First prize</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>S.Sarathi</td>
                                        <td>Technical quiz & On spot drawing</td>
                                        <td>Arasu Engineering college</td>
                                        <td>First prize</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>S.Sarathi</td>
                                        <td>Craft Work</td>
                                        <td>Periyar maniyammai Institute of science and technology</td>
                                        <td>First prize</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>P.Amsavalli, T.Srinithi</td>
                                        <td>Fire less cooking</td>
                                        <td>Periyar maniyammai Institute of science and technology</td>
                                        <td>First prize</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>V.Sivaranjani, T.Vinisha, K.Thangamaris</td>
                                        <td>Connection</td>
                                        <td>Periyar maniyammai Institute of science and technology</td>
                                        <td>Second prize</td>
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
                                        <th>YEAR</th>
                                        <th>JOB TITLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ARIVUKARASU.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ARUNPANDIYAN.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DHINESKUMAR.M</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KANIGACHALAM.G</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>HELEN SOBHA.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>
                        <p class="text-black">All India Workshop on Robotics and AI in Agriculture with major emphasis of food crops/ Technical Symposium/ Millets Function </p>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-7.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-8.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-9.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-10.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-11.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/agriImg/agri-12.jpg')}}" alt="">
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
            <h4 class="text-black">March 22- SPROUT TECH FEST 2025 (Symposium)</h4>
            <h4 class="text-black">April 25- Organize an expert talk on process of innovation development and
                technologies by Dr. V. Guna principal in charge of Nalanda university</h4>
            <h4 class="text-black">May 5- One day visit on Krishi Vigyan Kendra</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection