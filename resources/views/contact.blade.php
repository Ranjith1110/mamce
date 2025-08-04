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
                    <h2 class="text-white text-center fw-bolder">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End here -->

    <!-- Form Start -->
    <div class="contact-container bg-light">
        <div class="container">
            <div class="row g-0 contact-card">

                <div class="col-md-6 p-10">
                    <form id="contact-enquiery">
                        @csrf
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="text" name="name" class="form-control py-3"
                                placeholder="Your Name" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="email" name="email" class="form-control py-3"
                                placeholder="Your Email" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="number" name="phone_no" class="form-control py-3"
                                placeholder="Your Phone" required>
                        </div>
                        <div class="mb-4">
                            <input style="border: 2px solid #dfcfc1;" type="text" name="subject" class="form-control py-3"
                                placeholder="Your Subject" required>
                        </div>
                        <div class="mb-4">
                            <textarea style="border: 2px solid #dfcfc1;" class="form-control" rows="5"
                                placeholder="Your Message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn px-4 py-2" style="color: #fff; background-color: #9d7651;">Send
                            Message</button>
                    </form>
                </div>

                <div class="col-md-6 contact-image"></div>
            </div>
        </div>
    </div>
    <!-- Form End -->

    <!-- Map Start -->
    <div class="container my-5 py-10 text-center">
        <h3 class="title fw-bold mb-4">Our Location</h3>
        <div class="row">
            <div class="col-12">
                <div class="border rounded shadow" style="height: 50vh; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.588458704674!2d78.779515!3d10.994403799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bab1a4ee002bcf9%3A0xa208070d38331937!2sM.A.M.%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1735639969407!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Map End -->
<script>
    $(document).ready(function (){
        $("#contact-enquiery").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone_no: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 15,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Please enter your name',
                },
                email: {
                    required: 'Please enter email',
                    email: 'Enter a valid email address',
                },
                phone: {
                    required: 'Fill phone number',
                    number: 'Must be a valid phone number',
                    minlength: 'Phone number must be at least 10 digits long.',
                    maxlength: 'Phone number must not exceed 15 digits.',
                },
                subject: {
                    required: 'Please enter your Subject',
                },
                message: {
                    required: 'Please enter message',
                },
            },
            submitHandler: function (form) {
                const url = "{{ route('contact.enquiry') }}";
                const data = $(form).serialize();
                $("#contact-enquiery button[type='submit']").text('Submitting...').attr('disabled', true);

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function (result) {
                        $("#successMessage")
                            .removeClass('d-none alert-danger')
                            .addClass('alert-success')
                            .text('Your enquiry has been successfully submitted!');
                        $(form).trigger('reset');
                        $("#contact-enquiery button[type='submit']").text('Apply Now').attr('disabled', false);
                        setTimeout(() => {
                            $("#successModal").modal('show');
                        }, 500);
                    },
                    error: function () {
                        $("#successMessage")
                            .removeClass('alert-success d-none')
                            .addClass('alert-danger')
                            .text('There was an error submitting your enquiry. Please try again.');
                        $("#contact-enquiery button[type='submit']").text('Apply Now').attr('disabled', false);
                    },
                });
            },
        });
    });
</script>
    @endsection