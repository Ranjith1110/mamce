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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/ai&dsImg/ai&ds-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Artificial Intelligence and Data Science</h2>
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
            <h2 class="text-center fw-bold title-slogan">Decoding the Future, One Algorithm at a Time!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in AI&DS</a>
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
                            AI and Data Science are the key enablers for disruptive innovations of this century,
                            these emerging technological revolutions have reshaped our work and life style. From the
                            start of 2020, M.A.M.College of Engineering establishes a new department “Artificial
                            Intelligence and Data Science”. The department is driven by its commitment to excel in
                            research, design and development of next generation cutting-edge technologies in the
                            area of Artificial Intelligence and Data Analytics.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To build an ecosystem to contribute to society by producing students in Artificial
                                Intelligence and Data Science through education and research.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                To provide a good environment with latest technological infrastructure facilities
                                and interaction with industry the field of Artificial Intelligence and Data
                                Science.Research aptitude among the students through project-based learning.
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>INNOVATION LAB(Core i7 processor,16Gb RAM) </li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">Full Stack Development Program</p>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>
                        <!-- <h4 class="text-center">Students' Achievements List</h4> -->
                        <div class="table-container">
                            <table class="trust-table">
                                <h4 class="text-center">PLACEMENT DETAILS -2024 BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>EVENT NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>RAJKUMAR N</td>
                                        <td>POWER LIFTING</td>
                                        <td>I Prize</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>MOHAMED IRFAN I</td>
                                        <td>Football - Zonal Level</td>
                                        <td>III Prize</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SANJAYAN N</td>
                                        <td>Football - Zonal Level</td>
                                        <td>III Prize</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Rakshana M</td>
                                        <td>Microsoft Bangalore Office-Quiz program</td>
                                        <td>II Prize</td>
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
                                <h4 class="text-center">PLACEMENT DETAILS -2024 BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>JOB TITLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>G.Natarajan</td>
                                        <td>HTC Global services.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>S.Sabari</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>V.Muthu</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>N.Ranjith</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>S.Surya</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>M.Dhanushkumar</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>S.Abdul rahman</td>
                                        <td>NIZCARE Private Limited</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>NAME OF EVENT</th>
                                        <th>EVENT DATE</th>
                                        <th>STUDENTS</th>
                                        <th>RESOURCE PERSON</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PRESENTATION DAY</td>
                                        <td>12-02-2024</td>
                                        <td>III & IV YEAR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CONSERVE SOLUTION SEMINAR AT BIM</td>
                                        <td>06-03-2024</td>
                                        <td>III & IV YEAR</td>
                                        <td>Mr. M. MAHESWARN</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SYMPOMISUM</td>
                                        <td>23-03-2024</td>
                                        <td>II, III & IV YEAR</td>
                                        <td>Dr.K.DEVAKUMARAN</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KPM TOPOMAPPER& ENGINNERING SURVEYOR (INTERNSHIP COME PLACEMENT)</td>
                                        <td>04-03-2024</td>
                                        <td>IV</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>WORKSHOP ON SOFTWARE DEMONSTRATION</td>
                                        <td>27-05-2024</td>
                                        <td>II & III YEAR</td>
                                        <td>Mr.SANTHANA GOPALA KRISHNAN</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>"{{asset('images/separateCourses/ai&dsImg/ai&ds-banner.svg')}}
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/ai&dsImg/aids-7.jpg')}}" alt="">
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

            <h4 class="text-black">Hackathon-March 11th 2025</h4>
            <h4 class="text-black">Workshop-AI&ML-April 8th 2025</h4>
            <h4 class="text-black">Guest Lecture-GEN AI-May 10th 2025</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->


@endsection