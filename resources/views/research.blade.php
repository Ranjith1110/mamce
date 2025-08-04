@extends('includes.header')
@section('content')


<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->

<!-- Container for the popup form -->
<div id="popupContainer"></div>

<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Research</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Research Start here -->
<section id="courses">
    <div class="container-fluid">
        <div class="container">
            <div class="py-lg-10 py-md-8 py-6 text-center ">
                <p class="text-justify">M.A.M Research Development and Design Center, has been established to
                    catalyse proactive applied research to solve industry’s technical problems and is positioned to
                    address and contribute to the market and society needs.</p>
                <div class="py-5 text-justify">
                    <h5>The goals of the research institute are to</h5>
                    <p class="m-0">Publish papers in referred International Journals and Conferences.</p>
                    <p class="m-0">File patent applications in market-dependent countries.</p>
                    <p class="m-0">Assert relationship with multi-national research labs.</p>
                    <p class="m-0">Submit proposals to federal funding agencies.</p>
                    <span>The research institute works in a proactive manner to lay a foundation for work in a
                        particular area and based on this foundational work, submits concrete proposals to corporate
                        R&D labs and government funding agencies. The research institute is keen to offer applied
                        research and development services and explicitly demonstrate the value added.</span>
                </div>
                <div class="py-5 text-justify">
                    <h5>The Research Institute focuses on following domains.</h5>
                    <p class="m-0">Domain of Education: Study, research, develop tools and techniques to address the
                        needs of a college, faculty members, students, and prospective students.</p>
                    <p class="m-0">Domain of Next Generation Networks: grid research lab, Study of next generation
                        of networks and next generation services.</p>
                    <p class="m-0">Mathematics Domain: Research in Fuzzy logic.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Research End here -->
@endsection