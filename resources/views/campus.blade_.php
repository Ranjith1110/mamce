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
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Campus</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Campus Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp my-5" data-wow-delay="0.1s">
                <div class="campus-item position-relative h-100">
                    <div class="campus-text rounded p-5">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-5">
                            <img class="img-fluid" src="{{asset('images/campus/campus.jpg')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Lab Infrastructure Lab Infrastructure</h4>

                    </div>
                    <div class="campus-btn rounded-0 rounded-bottom">
                        <a class="fw-medium" href="#">Read More<i
                                class="bi bi-chevron-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Campus End -->

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