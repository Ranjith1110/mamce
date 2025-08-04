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
                <h2 class="text-white text-center fw-bolder">History of MAMCE</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- About MAMCE Start here -->
<section class="about-mamce">
    <div class="container">

        <div class="text-justify p-5">
            <h2 class="title">HISTORY OF MAMCE</h2>
            <p class="text-black">M.A.M. College of Engineering, The Gateway of Knowledge, was founded on 10th of
                February 1999, and
                was duly affiliated to the Anna University, Chennai, recognized by the Government of Tamil Nadu, and
                approved by the All India Council of Technical Education (AICTE) in the same year.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">OUR BACKBONE</h2>
            <p class="text-black">The able faculty members of the M.A.M. College of Engineering are most proficient
                with the many
                teaching methodologies, as applicable in engineering education and are nobly devoted to their
                profession. These faculty members of the college, upon whom the pride and the pillars of the college
                rest, are most consistent at their efforts in educating their students and helping them with the
                achievement of the dreams of themselves and those of their parents.
                The facilities at the M.A.M. College of Engineering are fast expanding and are continuously updated
                to reflect the change and trends in the engineering sector.
                The Labs, Libraries, and the wifi internet facilities are all part of the expanding infrastructure
                of the college, that aim at helping the students to secure hands-on experience along with the
                knowledge and understanding of the advanced concepts and techniques in the realms of their pursuits.
            </p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">OUR DEPARTMENT</h2>
            <p class="text-black">The M.A.M. College of Engineering offers an Under Graduate B.E, degree programmes
                in Bio medical Engineering, Civil Engineering, Mechanical Engineering, Computer Science
                and Engineering, Electrical & Electronics Engineering, Electronics & Communication Engineering,
                Electronics & Instrumentation Engineering and B.Tech programme in Information Technology, Artificial
                Intelligence & Data Science, Agricultural Engineering, Food Technology, Bio Technology. In addition, the M.A.M. College of Engineering also
                offers Post Graduate programmes leading to an M.E in Environmental Engineering, Electronics &
                Communication Engineering, Computer Science & Engineering, Manufacturing Engineering, Power
                Electronics & Drives in addition to the Master in Business Administration and the Master in Computer
                Applications.
            </p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">OUR Students' Achievements</h2>
            <p class="text-black">The M.A.M. College of Engineering till date has attracted many visiting faculties
                from prestigious
                institutions like the IIT, Chennai and the NIT, Tiruchirappalli besides having the presence of many
                academicians from universities worldwide, at several occasions. Besides the academia, the college
                has also a repute of receiving several delegations from the overseas inclusive of receiving several
                foreign diplomats at its premises.
                The M.A.M. College of Engineering is, in the interests of its students, well-served by the mutual
                agreements, MoU’s held with the several industrial houses and is also a preferred spot for the
                organization of several placement camps and polled placement drives.
                The M.A.M. College of Engineering is in addition proud to speak in volumes on the Students' Achievements of
                its students and the alumni who have made a career for themselves in India and abroad and continue
                to serve as the ambassadors of the college by spreading its good name and repute, through their
                exceptional talents and Students' Achievements.
            </p>
        </div>

    </div>
</section>
<!-- About MAMCE End here -->

@endsection