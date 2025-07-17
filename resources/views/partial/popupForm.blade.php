<!-- Join Area Start Here -->
<section class="ms-join-area pb-60 pt-130 p-relative ms-bg-2">
    <div class="ms-join-position p-absolute text-center">
        <h2 class="ms-title2 white-text mb-50">Join With us now</h2>
        <div class="ms-banner3-item-wrap ms-join-img-grid d-none">
            <div class="ms-banner3-item d-none d-md-block">
                <div class="ms-banner3-img2 m-img p-relative">
                    <img src="{{ asset('assets/img/course/bg.png') }}" alt="banner image">
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="popupform">
        <div class="row">
            <div class="col-lg-6 align-content-center">
                <img src="{{ asset('assets/img/course/bg.png') }}" alt="banner image" class="w-100 mt-110">
            </div>
            <div class="col-xl-6">
                <div class="ms-join-wrap ms-join-space mb-70 ms-bg-2">

                    <!-- Success message -->
                    <div id="formSuccess" class="alert alert-success" style="display: none;"></div>

                    <form method="POST" action="{{ route('enquiry') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ms-input-box style-2">
                                    <label for="name" class="text-white">Name</label>
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ms-input-box style-2">
                                    <label for="email" class="text-white">Email</label>
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ms-input-box style-2">
                                    <label for="phone" class="text-white">Phone</label>
                                    <input type="phone" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ms-input-box style-2">
                                    <label for="course">Select Service</label>
                                    <select name="service" class="form-select" required>
                                        <option value="Choose" disabled>Choose Service</option>
                                        <option value="Book Us for Event">Book us for Event</option>
                                        <option value="Enroll Course">Enroll For Dance Course</option>
                                        <option value="book creator space">Book our creator space</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="ms-submit-btn mt-20">
                                    <button class="unfill__btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Join Area End Here -->

@push('style')
<style>
    .ms-input-box input,
    .ms-input-box select,
    .ms-input-box .nice-select {
        border-radius: 12px;
    }

    input.error,
    select.error {
        border: 1px solid red !important;
    }

    label.error {
        color: red;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }
</style>
@endpush

@push('js')

<script>
    $(document).ready(function() {
        $.validator.addMethod("emailregex", function(value, element) {
            return this.optional(element) || /^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/i.test(value);
        });

        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s']+$/i.test(value);
        });

        $.validator.addMethod("numbers", function(value, element) {
            return this.optional(element) || /^[0-9]{10}$/.test(value);
        });

        $("#joinForm").validate({
            ignore: [],
            rules: {
                name: {
                    required: true,
                    letters: true
                },
                phone: {
                    required: true,
                    numbers: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    emailregex: true
                },
                course: {
                    required: true
                },
                date: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "First Name is required",
                    letters: "Only letters and spaces allowed"
                },
                phone: {
                    required: "Phone Number is required",
                    numbers: "Enter exactly 10 digits",
                    minlength: "Phone must be 10 digits",
                    maxlength: "Phone must be 10 digits"
                },
                email: {
                    required: "Email is required",
                    emailregex: "Enter a valid Email ID"
                },
                course: {
                    required: "Please select a course"
                },
                date: {
                    required: "Please select an expected date"
                }
            },
            errorPlacement: function(error, element) {
                element.closest('.ms-input-box').find('.error-placeholder').html(error);
            },
            submitHandler: function(form) {
                $.ajax({
                    url: $(form).attr('action'),
                    method: 'POST',
                    data: $(form).serialize(),
                    beforeSend: function() {
                        $(form).find("button[type='submit']").prop("disabled", true).text("Submitting...");
                        $('.error-placeholder').empty();
                        $('#formSuccess').hide();
                    },
                    success: function(response) {
                        form.reset();
                        $('#formSuccess').text("Thank you! Your submission was successful.").show();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const field in errors) {
                                const el = $(form).find(`[name="${field}"]`);
                                el.closest('.ms-input-box').find('.error-placeholder').html(`<label class="error">${errors[field][0]}</label>`);
                            }
                        } else {
                            alert("Something went wrong. Please try again.");
                        }
                    },
                    complete: function() {
                        $(form).find("button[type='submit']").prop("disabled", false).text("Join");
                    }
                });
            }
        });
    });
</script>
@endpush