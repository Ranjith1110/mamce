    @extends('includes.header')
    @section('content')

    <!-- Navbar Start here -->
    <div id="header"></div>
    <!-- Navbar End here -->

    <!-- Vertical Button Start here -->
    <button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
        class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
        data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
        Admission Enquiry
    </button>
    <!-- Vertical Button End here -->

    <!-- Include the popup content from the includes folder -->
    @include('includes.popup')

    <!-- Banner Section Start here -->
    <section id="banner">
        <div class="dep-banner">
            <div class="py-lg-10 py-md-8 py-6 position-relative">
                <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                    alt="">
                <div class="position-absolute">
                    <h2 class="text-white text-center fw-bolder">Other Fees</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End here -->

    <!-- Form Start -->
    <div class="contact-container bg-light">
        <div class="container">
            <div class="row g-0 contact-card">
                <div class="col-md-6 contact-image"></div>

                <div class="col-md-6 p-10">
                    <form id="other-fees-form" method="POST" action="{{route('payment-submit')}}">
                        @csrf
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="number" name="reg_no" class="form-control py-3"
                                placeholder="Register Number" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="text" name="student_name" class="form-control py-3"
                                placeholder="Student Name" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="number" name="phone_no" class="form-control py-3"
                                placeholder="Phone" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="email" name="contact_email" class="form-control py-3"
                                placeholder="Your Email" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="text" name="pay_for" class="form-control py-3"
                                placeholder="pay for" required readonly value="Other Fees">
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="number" name="amount" class="form-control py-3"
                                placeholder="Amount" required>
                        </div>
                        <button type="submit" name="icici" value="icici" class="btn px-4 py-2" style="color: #fff; background-color: #9d7651;">Pay By
                            ICICI (Recommended)</button>
                        <button type="submit" name="razorpay" value="razorpay" class="btn px-4 py-2" style="color: #fff; background-color: #9d7651;">Pay By
                            Razorpay</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Form End -->


    <script>
        $(document).ready(function() {
            $("#other-fees-form").validate({
                rules: {
                    reg_no: {
                        required: true,
                        number: true,
                        minlength: 12,
                        maxlength: 12,
                    },
                    student_name: {
                        required: true,
                    },
                    contact_email: {
                        required: true,
                        email: true,
                    },
                    phone_no: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15,
                    },
                    pay_for: {
                        required: true,
                    },
                    amount: {
                        required: true,
                        number: true,
                    },
                },
                messages: {
                    reg_no: {
                        required: 'Fill Register number',
                        number: 'Must be a valid Register number',
                        minlength: 'Phone number must be at least 12 digits long.',
                        maxlength: 'Phone number must not exceed 12 digits.',
                    },
                    student_name: {
                        required: 'Please enter your name',
                    },
                    contact_email: {
                        required: 'Please enter email',
                        email: 'Enter a valid email address',
                    },
                    phone: {
                        required: 'Fill phone number',
                        number: 'Must be a valid phone number',
                        minlength: 'Phone number must be at least 10 digits long.',
                        maxlength: 'Phone number must not exceed 15 digits.',
                    },
                    pay_for: {
                        required: 'Please enter your payfor',
                    },
                    amount: {
                        required: 'Fill Amount',
                        number: 'Must be a valid amount',
                    },
                },
                // submitHandler: function () {
                //     $("#tution-fees-form")[0].submit();
                // }
            });
        });
    </script>
    @endsection