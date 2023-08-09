@extends('theme.user.layouts.app')

@section('content')
    <div class="page-banner bg-1 ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-img">
                        <img src="assets/images/page-header/page-header-img-2.png" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-img">
                        <img src="assets/images/contact-img.png" alt="Image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        {{-- <form id="contactForm"> --}}
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your name</label>
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your email</label>
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your phone</label>
                                    <input type="text" name="phone" id="phone" required
                                        data-error="Please enter your number" class="form-control" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control" required
                                        data-error="Please enter your subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy."
                                        class="form-check-input" type="checkbox" id="gridCheck" required />
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to the
                                        <a href="terms-conditions.html">terms</a> and
                                        <a href="privacy-policy.html">privacy policy</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button onclick="messageSHow()" type="submit" class="default-btn">
                                    <span>Send message</span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-area">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.694846095021!2d90.41841507475323!3d23.829447885738254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65cbecf4d41%3A0xbce2b71e1c301332!2sMannan%20Plaza!5e0!3m2!1sen!2sbd!4v1691615774989!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script>
        function messageSHow() {
            $name = $('#name').val();
            $email = $('#email').val();
            $phone = $('#phone').val();
            $subject = $('#subject').val();
            $message = $('#message').val();
            if ($name == '' || $email == '' || $phone == '' || $subject == '' || $message == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all the fields!',
                })
                return false;
            }

            $.ajax({
                url: "/send-message",
                type: 'GET',
                dataType: 'json',
                success: function(result) {
                    Swal.fire(
                        'Thank you!',
                        'Your message has been sent successfully.',
                        'success'
                    )
                    $('#name').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    $('#subject').val('');
                    $('#message').val('');
                }
            });

        }
    </script>
@endsection

@section('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection
