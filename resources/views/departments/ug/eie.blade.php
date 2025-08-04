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
                <h2 class="text-white text-center fw-bolder">Electronics & Instrumentation Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">Where Accuracy Meets Innovation!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in EIE</a>
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
                            "Welcome to the Department of Electronics and Instrumentation Engineering (EIE). The
                            Department was started in the year 1998, offering Bachelor Degree programme (B.E.) in
                            Instrumentation Engineering later converted to Electronics and Instrumentation
                            Engineering in the year 2003 with 60 intakes. It is a core field emphasizing it's
                            importance in the control room of all Industries.
                            An eminent professor with 10 years of vast Industrial experience in the field of Process
                            Control took the lead in setting the pace of the course. The Department was engaged by a
                            team of Faculty members who are very dedicated to the student's community and had
                            expertise knowledge in various fields of Instrumentation.
                            The Electronics and Instrumentation Engineering department has an environmentally cool
                            atmosphere. The students will be at ease to know the functioning of various equipments
                            and systems practically. In addition the lab is provided with a spacious air conditioned
                            conference hall and department library. The department library has a collection of
                            various books related to Instrumentation and other modern technologies. The total
                            volumes including references in college and department, are around 3000.
                            The Labs are functioning in their individual enclosures with modern floor separated by
                            glass windows and providing a conducive atmosphere for conducting practical experiments
                            and the department has its own Association.
                            The department has submitted a proposal to the AICTE for grants to conduct various
                            seminars for students. In association with INSAT - Student's Association, department has
                            organized many events such as panel discussion, Group discussion, Techtalk, Paper
                            presentation, Technical quiz, Software debugging, Logical Thinking under the Symposium
                            named INSIGNIA, for the welfare of students to improve their technical skills and their
                            organizing skills."
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                Technology towards total automation in Instrumentation and Process Control
                                Engineering.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                "Providing a value based professional education with quality infrastructure, modern
                                teaching methodologies and full-fledged lab facilities, having latest automation
                                technologies on SCADA, DCS, MATLAB, LABVIEW, PLC.
                                To provide right blend of theory and practice thereby enabling the students to
                                become right professionals with high ethical values.
                                To empower and imbibe problem solving capabilities, create passion for learning,
                                foster innovation, nurture talents towards serving society and country"
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>TRANSDUCERS AND MEASUREMENTS LABORATORY</li>
                            <li>INDUSTRIAL INSTRUMENTATION LABORATORY</li>
                            <li>PROCESS CONTROL LABORATORY</li>
                            <li>INDUSTRIAL AUTOMATION LABORATORY</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p>Update Soon...</p>
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
                                        <td>M. SABARINATHAN</td>
                                        <td>DUMB CHARADES</td>
                                        <td>HOLY CROSS COLLEGE</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DHALAL ASMI</td>
                                        <td>EXTEMPORE COMPETITION</td>
                                        <td>CONDUCTED BY ISRO AND ANNA UNIVERSITY IN JAMAL MOHAMMED COLLEGE , TRICHY</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>M. SABARINATHAN, M. GURUSIVASRINIVASAN, V. SURENDHAR</td>
                                        <td>SCIENCE MODEL COMPETITION</td>
                                        <td>CONDUCTED BY ISRO AND ANNA UNIVERSITY IN JAMAL MOHAMMED COLLEGE , TRICHY</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>M. NASRULLAH</td>
                                        <td>STANDUP COMEDY, MIMICRY</td>
                                        <td>MAMARIA - 2K23 - M.A.M. COLLEGE OF ENGINEERING</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>M. SABARINATHAN</td>
                                        <td>QUIZ PROGRAM</td>
                                        <td>M.A.M. COLLEGE OF ENGINEERING</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>DHALAL ASMI</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>ANNA UNIVERSITY ,BIT CAMPUS TRICHY</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>SANTHOSH RV</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>ANNA UNIVERSITY ,BIT CAMPUS TRICHY</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>SANTHOSH RV</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>K.RAMAKRISHNAN ENGINEERING COLLEGE</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>R. JEEVA</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>K.RAMAKRISHNAN ENGINEERING COLLEGE</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>DHALAL ASMI</td>
                                        <td>EXTEMPORE COMPETITION</td>
                                        <td>CONDUCTED BY ISRO AND ANNA UNIVERSITY IN JAMAL MOHAMMED COLLEGE , TRICHY</td>
                                        <td>3RD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>

                        <p class="text-black">Update Soon...</p>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>
                        <ul class="text-black">
                            <li>PRESENTATION DAY</li>
                            <li>PROJECT EXPO 2K23</li>
                            <li>WEBINAR</li>
                            <li>WORKSHOP</li>
                        </ul>

                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eieImg/eie-7.jpg')}}" alt="">
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
            <h4 class="mb-lg-10">Coming Soon..</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection