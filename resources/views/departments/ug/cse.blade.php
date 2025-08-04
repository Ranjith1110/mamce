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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/cseImg/cse-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Computer Science & Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">Innovate. Disrupt. Repeat.!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in CSE</a>
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
                            The History of Computer Science and Engineering discipline at MAMCE dates back to 1998
                            with initial intake of 40 in UG programme (BE- CSE) to meet the demand for
                            well-qualified computer professionals. Subsequently the department upgraded its intake
                            from 40 to 60 in the year 2000, 60 to 120 in the year 2005 and 120 to 180 in the year
                            2012. In 2009, the department started the PG programme (M.E-CSE) with initial intake of
                            18 and increased to 36 in the year 2012.

                            The Department has more than 300 students and 20 core faculty members. The department
                            has been accredited by the National Board of Accreditation; AICTE, New Delhi. Our
                            Department is a proud Member of the Computer Society of India Students Chapter. The
                            department has experienced faculty members specialized in Compiler Design, Object
                            Oriented System analysis and design, Artificial Intelligence, Distributed Computing,
                            RDBMS, Computer Networks, OOPS, Data Structures and Algorithm, Software Engineering,
                            Operating Systems, Grid Computing, Data Mining and Mobile Computing.

                        <p class="text-black fw-bold">With an aim to sharpen the young student and faculty minds,
                            the department strives to:
                        </p>
                        <ul class="text-black">
                            <li>Become a pioneering centre of excellence in providing hands on Training in ORACLE
                                through WORKFORCE DEVELOPMENT PROGRAMME.</li>
                            <li>Provide Infosys: Foundation Programme 3.1 on Core subjects to nurture effective
                                capabilities for the development of high quality technical manpower to meet the
                                challenges in the Industry.</li>
                            <li>Offer cost-free Training on Open Source Software’s through Spoken Tutorial Project
                                of
                                IIT Bombay for both students and faculties.</li>
                            <li>Provide value-added programmes and activities such as Talent Inspirit- an Intra
                                Department Technical Meet , Techno Zephyr – an Intra Department Activity Contest,
                                ComBlaze – a National Level Technical Meet.</li>
                            <li>Promote an effective learning and Teaching community with the help of various
                                Technical workshops, Faculty Empowerment Programmes and seminars.</li>
                            <li>Foster Research Activity, the department has emerged with “Software System Group” to
                                discuss and exchange various research ideas and promote new projects for aspirants.
                            </li>
                            <li>Provide better teaching environment, all the faculty rooms are modernized and each
                                faculty is provided with a Laptop.</li>
                            </p>
                            <button class="btn text-white fw-bold" style="background-color: #9d7651;">VIEW PROGRAM
                                OUTCOMES ></button>
                            <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                                <h2 class="title-slogan mb-4">VISION</h2>
                                <p class="text-justify text-black">
                                    Create high-quality Software Professionals
                                </p>
                            </div>
                            <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                                <h2 class="title-slogan mb-4">MISSION</h2>
                                <p class="text-justify text-black">
                                    "To educate and generate atleast 90% of the students as Competent professionals
                                    to become part of the Industry and research organizations.
                                    To give personalized training to the students with arrears, identifying their
                                    strength and weakness for the improvement of the academic results on an average
                                    of 85%.
                                    Offer a variety of blended learning methodology for overall personality
                                    improvement.
                                    "
                                </p>
                            </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Torvalds Lab</li>
                            <li>Dijkstra Lab</li>
                            <li>Ian Foster Lab</li>
                            <li>Alan Kay Lab</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">Total Station Surveying</p>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>

                        <h4 class="text-center">EVENTS ORGANIZED BY ACES - STUDENTS ASSOCIATION WITH DEPARTMENT </h4>
                        <div class="table-container">
                            <table class="trust-table">
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
                                        <td>All students from the final Year CSE</td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>Participated Students are recognized by a recognition Certificate. </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>"Parameshwari P, Nivetha K, Asika M" </td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>First Prize</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>"Karthikeyan N, Mohammed Yacoob, Mohammed Riyas, Rajesh R, Rokesh Kannan V"</td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>Second Prize</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>"Swathi R, Varshini V, Vikneshwari M"</td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>Third Prize</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Manikandan A</td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>Fourth Prize</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>"Thinakaran, Thirumadheshwaran, Srimath Hari Shesath, Saran"</td>
                                        <td>TECH TALK FEST 3 - Third Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof P Pavalakodi, Prof M Noorunnisha, Dr S Rajalakshmi </td>
                                        <td>Fifth Prize</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>All students from the final Year CSE</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanth</td>
                                        <td>Participated Students are recognized by a recognition Certificate.</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>"Haritha A C, Swetha S"</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanthi</td>
                                        <td>Text Summarization Using NLP - First Prize INR 5000.00</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>"Gokula Krishnan S, Bharath Raja R V, Abinesh E, Mohamed IbrahimK"</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanthi</td>
                                        <td>Image Caption Generator - Second Prize - INR 3000.00</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>"Mohammed Akkim Kadhar M, Hanas Ahamed M, Balaji S, Manikandan T"</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanthi</td>
                                        <td>Cyber Vaccination - Third Prize - INR 2000.00</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>"Sachin Narayanasamy, Rengarajan V, Joseph Raj A, Sanjay Kannan R"</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanthi</td>
                                        <td>Sentimental Analysis - Third Prize - INR 2000.00</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>"M Thinakaran, R Thirumadheshwaran, P Parameshwari"</td>
                                        <td>MAMCE HACK 2K24 - Final Year. Students are grouped into the size of 4 and motivated to do a project an any topic and give the Innovative Solutions for Sustainable Development in Informatics. Jury Members: , Prof V Pugazhenthi Prof P Pavalakodi.Prof. M Noorunnisha Prof G Shanthi</td>
                                        <td>Student Volunteers</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>"Akash, Jahir Hussain Taysir, Prince Afrido A"</td>
                                        <td>TECH TALK FEST 2 - Second Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof M Noorunnisha, Prof P Ranjith</td>
                                        <td>First Prize</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Rethinasamy E</td>
                                        <td>TECH TALK FEST 2 - Second Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof M Noorunnisha, Prof P Ranjith</td>
                                        <td>Second Prize</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Flora A, Bhavadharani K, Aswini S, Aswathi, Anushiya S</td>
                                        <td>TECH TALK FEST 2 - Second Year Students prepare a PPT to present an any topic Trends in Computing and Informatics. Jury Member Prof M Noorunnisha, Prof P Ranjith</td>
                                        <td>Third Prize</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="text-center pt-10">EVENTS AND COMPETITIONS (NON TECHNICAL) - PARTICIPATION</h4>
                        <div class="table-container">
                            <table class="trust-table">
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
                                        <td>Rethinasamy E</td>
                                        <td>Kallori Stars Michy - Group Dance</td>
                                        <td>Ist Prize</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nithyasri</td>
                                        <td>Kallori Stars Michy - Solo Singing</td>
                                        <td>Ist Prize</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Rethinasamy E</td>
                                        <td>Trichy Engineering College Cultural Competition - Group Dance</td>
                                        <td>2nd Prize - INR 5000.00</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Nithyasri</td>
                                        <td>Trichy Engineering College Cultural Competition - Singing</td>
                                        <td>1st Prize - INR 3000.00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SHAFANA A</td>
                                        <td>Womens Day Celebration - Mehanthi</td>
                                        <td>1st Prize</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>RIFANA R</td>
                                        <td>Womens Day Celebration - MakeUp</td>
                                        <td>1st Prize</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Bharath M</td>
                                        <td>Maarathon - Keeranur - 5 KM</td>
                                        <td>3rd Place</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Rengarajan V, Sachin_Narayanasamy</td>
                                        <td>Particpated in the State Level Technical Symposium entitled, "FESTRONIX 2K23"</td>
                                        <td>FIRST  PRIZE in Connexion Technical </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Arnika K</td>
                                        <td>Anna University BIT Campus,  TN Regional Level Essay Writing Competition - Organized by Anna University Chennai</td>
                                        <td>1st  Price - Rs 10000 Cash Price</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Bharath Raja R.V</td>
                                        <td>Participated and Won Bronze Medal in the Decathon Open Arm Wrestling Torunament 2023 under 90KG organized DECATHON, Neelambur branch, Coimbatore.</td>
                                        <td>Won Bronze Medal in the Tournament</td>
                                    <tr>
                                        <td>11</td>
                                        <td>Bharath Raja R.V</td>
                                        <td>Participated and Won first prize in the Arm-wrestling Competition organized by SRM University Chennai.</td>
                                        <td>Won First Prize with Cash Reward of INR 2000</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Mohammed, Rizwan M</td>
                                        <td>Participated and Won second Prize in the District Level Weight Lifting Championship Porgram(Mr Stron in Trichy) organized by  Indian Fitness Federation - Trichirappali Chapter.</td>
                                        <td>Participated and Won Second Prize</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Bharath Raja R.V</td>
                                        <td>Participated and Won many medals in the Tamilnadu State level Arm - Wrestling Championship Tournament 2023 organized by agies of Arm-Wrestling Federation of India at Chennai.</td>
                                        <td>Won One Gold Medal and 3 Silver Medals in both youth and seniors category..</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Mohammed Rizwan M,  MUHAMMED HUSAIN U, Kesavamoorthy S,  MOHAMED FAIZUL, RAHUMAN S</td>
                                        <td>Particpated in the Playing XI in the Anna University Football Zone Level Tournament held at SRM TRP Engineering College Trichy</td>
                                        <td>MAMCE Won Third Place</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Mr Rethinasamy</td>
                                        <td>"Rocking dance acadamy presents 
                                        "DANCE BEATS"</td>
                                        <td>First Prize</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>

                        <!-- <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>YEAR</th>
                                        <th>JOB TITLE</th>
                                        <th>STUDENT PHOTO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ARIVUKARASU.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ARUNPANDIYAN.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DHINESKUMAR.M</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KANIGACHALAM.G</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>HELEN SOBHA.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->

                        <h4>Update Soon..</h4>

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
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5 d-flex justify-content-center">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/cseImg/ugCse.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-7.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-8.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-9.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-10.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-11.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-12.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/cseImg/ugCse-13.jpg')}}" alt="">
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