<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<style>
    .error{
        color:#b93d3d;
    }
    .form-control,
    .form-select {
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
        border-radius: 8px;
        padding: 10px;
        font-size: 1rem;
        color: #000;
        transition: all 0.3s ease;
    }

    .mamcePopup {
        background: rgba(255, 255, 255, 0.5) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        border-radius: 15px !important;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1) !important;
        width: 75% !important;
        margin: 0 auto !important;
    }

    .popupBtn {
        background-color: #9d7651 !important;
        color: #fff !important;
        border: none;
        transition: background-color 0.3s ease;
    }

    .popupBtn:hover {
        background-color: #b07d60 !important;
    }

    @media (max-width: 500px) {

        .mamcePopup {
            width: 100%;
        }

    }
</style>

<div class="modal fade" id="admissionEnquiryModal" tabindex="-1" aria-labelledby="admissionEnquiryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content mamcePopup">
            <div class="modal-header">
                <h5 class="modal-title" id="admissionEnquiryLabel">Admission Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="admission-enquiery">
                    @csrf
                    <div class="mt-3">
                        <label for="name" class="form-label text-dark">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label text-dark">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mt-3">
                        <label for="phone" class="form-label text-dark">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone_no" placeholder="Enter your phone number">
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label text-dark">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="course" class="form-label text-dark">Degree</label>
                        <select class="form-select" id="course_type" name="course_type">
                            <option selected disabled>Choose Degree</option>
                            <option value="ug">UG</option>
                            <option value="pg">PG</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="course" class="form-label text-dark">Course Type</label>
                        <select class="form-select course-class" id="course" name="course">
                           
                        </select>
                    </div>
                    {{--<div class="mt-3">
                        <label for="course" class="form-label text-dark">Course Selection</label>
                        <select class="form-select" id="course" name="course">
                            <option selected disabled>Choose your course</option>
                            <option value="Course 1">Course 1</option>
                            <option value="Course 2">Course 2</option>
                            <option value="Course 3">Course 3</option>
                        </select>
                    </div>--}}
                    <div class="text-center mt-5">
                        <button type="submit" class="btn popupBtn w-50 fw-bold">Apply Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content mamcePopup">
            <div class="modal-body text-center">
                <h5 class="modal-title text-success" id="successModalLabel">Success!</h5>
                <p>Your Admission enquiry has been successfully submitted.</p>
                <button type="button" class="btn popupBtn w-50 mt-3" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $("#course_type").change(function () {
        let html;
        if ($(this).val() === 'ug') {
            html = `<option value="">Select Course</option>
                    <option value="B.E Civil Engineering">B.E Civil Engineering</option>
                    <option value="B.E Computer Science and Engineering">B.E Computer Science and Engineering</option>
                    <option value="B.E Electrical and Electronics Engineering">B.E Electrical and Electronics Engineering</option>
                    <option value="B.E Electronics and Communication Engineering">B.E Electronics and Communication Engineering</option>
                    <option value="B.E Electronics and Instrumentation Engineering">B.E Electronics and Instrumentation Engineering</option>
                    <option value="B.E Information Technology">B.E Information Technology</option>
                    <option value="B.E Mechanical Engineering">B.E Mechanical Engineering</option>
                    <option value="B.Tech Artificial Intelligence and Data Science">B.Tech Artificial Intelligence and Data Science</option>
                    <option value="B.Tech Agricultural Engineering">B.Tech Agricultural Engineering</option>
                    <option value="B.Tech Biomedical Engineering">B.Tech Biomedical Engineering</option>
                    <option value="B.Tech Food Technology">B.Tech Food Technology</option>
                    <option value="B.Tech Bio Technology">B.Tech Bio Technology</option>
                    <option value="B.Tech Cyber Security">B.Tech Cyber Security</option>
                    <option value="B.Tech Artificial Intelligence and Machine Learning">B.Tech Artificial Intelligence and Machine Learning</option>`;
        } else {
            html = `<option value="">Select Course</option>
                    <option value="M.B.A Master of Business Administration">M.B.A Master of Business Administration</option>
                    <option value="M.C.A Master of Computer Applications">M.C.A Master of Computer Applications</option>
                    <option value="M.E Environmental Engineering">M.E Environmental Engineering</option>
                    <option value="M.E Computer Science and Engineering">M.E Computer Science and Engineering</option>
                    <option value="M.E Electronics and Communication Engineering">M.E Electronics and Communication Engineering</option>
                    <option value="M.E Power Electronics and Drives">M.E Power Electronics and Drives</option>
                    <option value="M.E Manufacturing Engineering">M.E Manufacturing Engineering</option>`;
        }
        $('.course-class').html(html);
    });

    $("#admission-enquiery").validate({
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
            address: {
                required: true,
            },
            course_type: {
                required: true,
            },
            course: {
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
            phone_no: {
                required: 'Fill phone number',
                number: 'Must be a valid phone number',
                minlength: 'Phone number must be at least 10 digits long.',
                maxlength: 'Phone number must not exceed 15 digits.',
            },
            address: {
                required: 'Please enter your address',
            },
            course_type: {
                required: 'Please select course type',
            },
            course: {
                required: 'Please select course',
            },
        },
        submitHandler: function (form) {
            const url = "{{ route('admission.enquiry') }}";
            const data = $(form).serialize();
            $("#admission-enquiery button[type='submit']").text('Submitting...').attr('disabled', true);

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
                    $("#admission-enquiery button[type='submit']").text('Apply Now').attr('disabled', false);
                    $("#admissionEnquiryModal").modal('hide');
                    setTimeout(() => {
                        $("#successModal").modal('show');
                    }, 500);
                },
                error: function () {
                    $("#successMessage")
                        .removeClass('alert-success d-none')
                        .addClass('alert-danger')
                        .text('There was an error submitting your enquiry. Please try again.');
                    $("#admission-enquiery button[type='submit']").text('Apply Now').attr('disabled', false);
                },
            });
        },
    });
});

</script>