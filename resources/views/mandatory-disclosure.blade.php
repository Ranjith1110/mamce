@extends('includes.header')
@section('content')

<style>
    .mandatory-section .accordion .accordion-item {
        margin-bottom: 20px;
        box-shadow: 0 0 30px rgba(0, 0, 0, .08);
        border: none;
    }

    .mandatory-section .accordion .accordion-item .accordion-header .accordion-button {
        color: #fff;
        background: rgb(157, 118, 81);
        font-size: 18px;
        padding: 18px 24px;
    }

    .mandatory-section .accordion .accordion-item .accordion-header .accordion-button.collapsed {
        color: #000;
        background: #fff;
    }

    .content .navbar .navbar-nav .nav-link {
        margin-left: 25px;
        padding: 12px 0;
        color: var(--dark);
        outline: none;
    }

    .content .navbar .navbar-nav .nav-link:hover,
    .content .navbar .navbar-nav .nav-link.active {
        color: var(--primary);
    }

    .content .navbar .sidebar-toggler,
    .content .navbar .navbar-nav .nav-link i {
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #FFFFFF;
        border-radius: 40px;
    }

    .content .navbar .dropdown-toggle::after {
        margin-left: 6px;
        vertical-align: middle;
        border: none;
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        transition: .5s;
    }

    .content .navbar .dropdown-toggle[aria-expanded=true]::after {
        transform: rotate(-180deg);
    }

    @media (max-width: 575.98px) {
        .content .navbar .navbar-nav .nav-link {
            margin-left: 15px;
        }
    }

    .border-bottoms {
        border-bottom: 1px solid #cdcecf;
    }
</style>


<!-- Navbar Start here -->
<!-- Navbar End here -->

<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->

<!-- Container for the popup form -->

<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Mandatory Disclosure</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Mandatory Start -->
<div class="container-fluid mandatory-section bg-light py-5">
    <div class="container py-5">
        <div class="wow fadeInRight" data-wow-delay="0.4s">
            <div class="">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                NAME OF THE INSTITUTION
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show active"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">

                                        <div class="">
                                            <ul class="list-unstyled">
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Name of the Institution</li>
                                                    <li class="ms-20">M.A.M. College of Engineering</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Address of the Institution</li>
                                                    <li class="ms-20">Trichy - Chennai Trunk Road Siruganur,
                                                        Tiruchirappalli District Tamil Nadu</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">City & Pincode</li>
                                                    <li class="ms-20">Tiruchirappalli - 621 105.</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">State / UT</li>
                                                    <li class="ms-20">Tamil Nadu</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Phone number with STD code</li>
                                                    <li class="ms-20">9952522022, 9952182828</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Office hours at the Institution</li>
                                                    <li class="ms-20">9.00 AM to 4.30 PM</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Academic hours at the Institution</li>
                                                    <li class="ms-20">9.00 AM to 4.30 PM</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Email</li>
                                                    <li class="ms-20">secretary@mamce.org</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Website</li>
                                                    <li class="ms-20">www.mamce.org</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Nearest Railway Station (dist. in KM)
                                                    </li>
                                                    <li class="ms-20">Srirangam (16 km from College)</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Nearest Airport (dist. in KM)</li>
                                                    <li class="ms-20">Trichy (32 km from College)</li>
                                                </div>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                AICTE File No.
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-10">
                                <div id="students-corner" class="content-section">

                                    <div class="table-container">
                                        <table class="trust-table">
                                            <thead>
                                                <tr class="text-white" style="background-color: #9d7651;">
                                                    <th>SI.NO</th>
                                                    <th>DEGREE WITH COURSE</th>
                                                    <th>AICTE APPROVAL WITH NO. AND DATE</th>
                                                    <th>PERIOD OF APPROVAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>B.E. - Computer Science & Engineering (Artificial Intelligence
                                                        and Machine Learning)</td>
                                                    <td>F.No. Southern/1-44640388497/2025/EOA dated 10.04.2025</td>
                                                    <td>Year 2025-26</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>B.E. - Computer Science & Engineering (Cyber Security)</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>B.Tech -Bio Technology</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>B.E.-Bio Medical Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>B.Tech.-Food Technology</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>B.Tech. -Artificial Intelligence & Data Science</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>B.Tech. - Agricultural Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>B.E. - Computer Science & Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>B.E. - Electronics & Communication Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>B.E. - Electrical & Electronics Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>B.E. - Electronics & Instrumentation Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>B.Tech. - Information Technology</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>B.E. - Mechanical Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>B.E. - Civil Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>M.E. - Computer Science & Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>M.E. - Electronics & Communication Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>M.E. - Power Electronics & Drives</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>M.E. - Manufacturing Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>M.E. - Environmental Engineering</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>MBA(Master of Business Administration)</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>MCA - Master of Computer Applications</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>BBA - (Bachelor of Business Administration)</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>BCA - Bachelor of Computer Applications</td>
                                                    <td>"</td>
                                                    <td>"</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                TYPE OF INSTITUTION
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">

                                        <div class="">
                                            <ul class="list-unstyled">
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Type of Institution</li>
                                                    <li class="ms-20">Private - Self Financed</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Category (1) of the Institution</li>
                                                    <li class="ms-20">Minority specify Minority : Muslim</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Category (1) of the Institution</li>
                                                    <li class="ms-20">Co-Ed</li>
                                                </div>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                NAME OF THE ORGANIZATION RUNNING THE INSTITUTION
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">

                                        <div class="">
                                            <ul class="list-unstyled">
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Name of the Organization running the
                                                        institution</li>
                                                    <li class="ms-20">Maluk Educational Health & Charitable
                                                        Trust</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Type of the Organization</li>
                                                    <li class="ms-20">Trust</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Address or the Organization</li>
                                                    <li class="ms-20">49, Raja Colony, Collector's Office Road,
                                                        Tiruchirappalli - 621 105.</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Registered with</li>
                                                    <li class="ms-20">Sub Registrar</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Registration No.</li>
                                                    <li class="ms-20">301/1993</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Registration date</li>
                                                    <li class="ms-20">25 / 10 / 1993</li>
                                                </div>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                NAME OF THE AFFILIATING UNIVERSITY
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">

                                        <div class="">
                                            <ul class="list-unstyled">
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Name of the Affiliating University Address
                                                    </li>
                                                    <li class="ms-20">Anna University, Chennai Guindy Chennai - 600
                                                        025. Tamil Nadu</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Website</li>
                                                    <li class="ms-20">www.annauniv.edu</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Latest Affiliating period</li>
                                                    <li class="ms-20">Affiliation granted 2019 - 2020</li>
                                                </div>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                NAME OF THE PRINCIPAL / DIRECTOR
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">

                                        <div class="">
                                            <ul class="list-unstyled">
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Name of the Principal</li>
                                                    <li class="ms-20">Dr. M. SHANMUGA PRIYA</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Exact Designation</li>
                                                    <li class="ms-20">Principal</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Phone No with STD code</li>
                                                    <li class="ms-20">0431-2650550</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Fax No. with STD code</li>
                                                    <li class="ms-20">0431-2650377</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Email</li>
                                                    <li class="ms-20">principalmamce@mamce.org</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Highest Degree</li>
                                                    <li class="ms-20">Ph.D.,</li>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                                    <li class="fw-bold">Field of specialization</li>
                                                    <li class="ms-20">CSE</li>
                                                </div>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                GOVERNING BOARD MEMBERS
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-10">
                                <div id="students-corner" class="content-section">

                                    <div class="table-container">
                                        <table class="trust-table">
                                            <thead>
                                                <tr class="text-white" style="background-color: #9d7651;">
                                                    <th>SI.NO</th>
                                                    <th>MEMBERS</th>
                                                    <th>DESIGNATION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>DR. MR. M.A. MOHAMED NIZAM</td>
                                                    <td>CHAIRMAN</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mr. P. MANNAR JAWAHAR</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mr. R.A. KRISHNAKUMAR</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Mr. RAGHAVAN</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Mr. BABU NIZAM</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Mrs. N. SHASMINAZ NIZAM</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. M. SHANMUGA PRIYA</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Mr. U.S. SARVADAYAPARAN</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Mrs. T. SATHYA</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Dr. P.V. MOHAN RAM</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Mrs. T. NANCY JEEVA</td>
                                                    <td>MEMBER</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                GRIEVANCES REDRESSAL CELL
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-10">
                                <div id="students-corner" class="content-section">

                                    <div class="table-container">
                                        <table class="trust-table">
                                            <thead>
                                                <tr class="text-white" style="background-color: #9d7651;">
                                                    <th>SI.NO</th>
                                                    <th>Name of the Committee Members</th>
                                                    <th>Position in Committee</th>
                                                    <th>Designation</th>
                                                    <th>Phone Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Prof.W.Stanley Karunakaran</td>
                                                    <td>Chairman</td>
                                                    <td>HoD/ECE</td>
                                                    <td>9944562640</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Dr.M.Afzal Ali Baig</td>
                                                    <td>Vice Chairman</td>
                                                    <td>Dean</td>
                                                    <td>9842081297</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Prof. T. Sathya</td>
                                                    <td>Member</td>
                                                    <td>Vice Principal & HoD/Civil</td>
                                                    <td>98427 50133</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Prof. Dr. K. Balamurugan</td>
                                                    <td>Member</td>
                                                    <td>HoD/Mech</td>
                                                    <td>99940 70997</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Prof. Dr. K. Manikandan</td>
                                                    <td>Member</td>
                                                    <td>Vice Principal - Admin</td>
                                                    <td>94436 50340</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Prof K Ilango</td>
                                                    <td>Member</td>
                                                    <td>HoD/AI&DS</td>
                                                    <td>9443139060</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>P Ravichandran</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year Civil Engg</td>
                                                    <td>9578645304</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>R S Dharun Aghash</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year Mech Engg</td>
                                                    <td>9442075987</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>A Kanishkar</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year Agri Engg</td>
                                                    <td>7871897780</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>M Sabitha</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year ECE</td>
                                                    <td>6380378239</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>R Jegadeesh</td>
                                                    <td>Member - Student</td>                                                    
                                                    <td>IV year CSE</td>
                                                    <td>8438489200</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>D Bhuvaneshwaran</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year EEE</td>
                                                    <td>9025777355</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>H.George Samvel</td>
                                                    <td>Member - Student</td>
                                                    <td>IVyear AI&DS</td>
                                                    <td>7305730629</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>V Harish</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year IT</td>
                                                    <td>7094991331</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>T Deenadayalan</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year EIE</td>
                                                    <td>9600682633</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>M. Selvi</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year ECE</td>
                                                    <td>70106 98287</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>S. Sabari</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year AI&DS</td>
                                                    <td>78680 43538</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>S. Jegadesh</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year EEE</td>
                                                    <td>8778294102</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Sachin Narayanasamy</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year CSE</td>
                                                    <td>8903019036</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>P. Lenin</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year IT</td>
                                                    <td>97894 95209</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>P. Ariharan</td>
                                                    <td>Member - Student</td>
                                                    <td>IV year EIE</td>
                                                    <td>77088 08466</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                ANTI RAGGING SQUAD MEMBERS
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-10">
                                <div id="students-corner" class="content-section">

                                    <div class="table-container">
                                        <table class="trust-table">
                                            <thead>
                                                <tr class="text-white" style="background-color: #9d7651;">
                                                    <th>SI.NO</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Present Designation</th>
                                                    <th>Phone Number</th>
                                                    <th>E-mail id</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Prof. Dr. M. Shanmuga Priya</td>
                                                    <td>Chair- person</td>
                                                    <td>Principal</td>
                                                    <td>8220026054</td>
                                                    <td>principalmamce@mamce.org</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Dr.M.Afzal Ali Baig</td>
                                                    <td>Vice Chairman</td>
                                                    <td>Dean</td>
                                                    <td>9842081297</td>
                                                    <td>deenacademics@mamce.org</td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Prof. T. Sathya</td>
                                                    <td>Member</td>
                                                    <td>Vice Principal & HoD/Civil</td>
                                                    <td>98427 50133</td>
                                                    <td>sathyababu03@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Dr. Sathishkumar T</td>
                                                    <td>Member</td>
                                                    <td>Associate Prof / Chemistry</td>
                                                    <td>9994370857</td>
                                                    <td>sathish17577@yahoo.com</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Prof.D.Edward Christy</td>
                                                    <td>Member</td>
                                                    <td>Assistant Professor</td>
                                                    <td>8667385472</td>
                                                    <td>christychem@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr.G.Prakash</td>
                                                    <td>Member</td>
                                                    <td>Assistant Professor</td>
                                                    <td>9486497221</td>
                                                    <td>eeehod@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Balamurugan K</td>
                                                    <td>Member</td>
                                                    <td>HOD MECH</td>
                                                    <td>9994070997</td>
                                                    <td>balaharini71@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Prof.K.Ilango</td>
                                                    <td>Member</td>
                                                    <td>HoD/AI&DS</td>
                                                    <td>9443139060</td>
                                                    <td>hodaids@mamce.org</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                ADMISSION QUOTA
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body px-5 px-lg-10">
                                <div class="content-section p-0 p-lg-10">

                                    <div class="list-container bg-body px-0 px-lg-6 rounded">
                                        <h2 class="title">ENGINEERING & TECHNOLOGY COURSES</h2>
                                        <h2 class="title">ENTRANCE TEST / ADMISSION CRITERIA</h2>
                                        <ul>
                                            <li>Admission was made upon the Tamilnadu +2 Exam result</li>
                                            <li>50 % of seats were surrendered to the Government Quota under Single
                                                Window System</li>
                                            <li>50 % of seats will be filled by the College under Management Quota
                                                through consortium. The highest scorer in qualifying examination stands
                                                first and others follows suit.</li>
                                        </ul>
                                        <h2 class="title">Cut off / last candidate admitted</h2>
                                        <div class="">
                                            <div class="text-center mt-8">
                                                <h4 class="title">Cut off 2020</h4>
                                            </div>
                                            <div id="students-corner" class="content-section">

                                                <div class="table-container">
                                                    <table class="trust-table">
                                                        <thead>
                                                            <tr class="text-white" style="background-color: #9d7651;">
                                                                <th>SI.NO</th>
                                                                <th>BRANCH</th>
                                                                <th>Cut off</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>ECE</td>
                                                                <td>152.50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>EEE</td>
                                                                <td>130</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>AI&DS</td>
                                                                <td>132.5</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>E&I</td>
                                                                <td>108</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>IT</td>
                                                                <td>142.50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>MECH</td>
                                                                <td>134</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>AGRI</td>
                                                                <td>157</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>CIVIL</td>
                                                                <td>130.50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>CSE</td>
                                                                <td>163.5</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                            <div class="text-center mt-8">
                                                <h4 class="title">Subject wise Intake approved for 2021-2022</h4>
                                            </div>
                                            <div id="students-corner" class="content-section">

                                                <div class="table-container">
                                                    <table class="trust-table">
                                                        <thead>
                                                            <tr class="text-white" style="background-color: #9d7651;">
                                                                <th>SI.NO</th>
                                                                <th>BRANCH</th>
                                                                <th>2021 - 2022</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>B.Tech. -Artificial Intelligence & Data Science
                                                                </td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>B.E. - Agricultural Engineering</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>B.E. - Computer Science & Engineering</td>
                                                                <td>150</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>B.E. - Electronics & Communication Engineering
                                                                </td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>B.E. - Electrical & Electronics Engineering</td>
                                                                <td>90</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>B.E. - Electronics & Instrumentation Engineering
                                                                </td>
                                                                <td>30</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>B.Tech. - Information Technology</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>B.E. - Mechanical Engineering</td>
                                                                <td>120</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>B.E. - Civil Engineering</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>M.E. - Computer Science & Engineering</td>
                                                                <td>18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>M.E. - Electronics & Communication Engineering
                                                                </td>
                                                                <td>18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>M.E. - Power Electronics & Drives</td>
                                                                <td>09</td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>M.E. - Manufacturing Engineering</td>
                                                                <td>18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>M.E. - Environmental Engineering</td>
                                                                <td>18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>MBA - Master of Business Administration</td>
                                                                <td>60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>MCA - Master of Computer Applications</td>
                                                                <td>60</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                            <h4 class="title mt-8">MBA COURSE</h4>
                                            <div>
                                                <h4 class="title"> ENTRANCE TEST</h4>
                                            </div>
                                            <ul>
                                                <li>Govt. Quota (TANCET) Mgt. Quota (Consortium)</li>
                                            </ul>
                                            <h4 class="title">MCA COURSE</h4>
                                            <div>
                                                <h4 class="title">ENTRANCE TEST</h4>
                                            </div>
                                            <p> Govt. Quota (TANCET) Mgt. Quota (Consortium)</p>
                                            <h4 class="title">NAME OF TEACHING STAFF</h4>
                                            <p>Refer Annexure</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mandatory End -->

@endsection