@extends('theme.user.layouts.app')

@section('content')
    <div class="page-banner bg-1 ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>About Our Company</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
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

    <div class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img mr-20" data-aos="fade-right" data-aos-duration="1300" data-aos-delay="300">
                        <img src="assets/images/about/about-4.png" alt="Image" />
                        <div class="experience style">
                            <p>30 YEARS OF EXPERIENCE DOCTORS</p>
                            <div class="icon">
                                <i class="flaticon-expert"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-20" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="300">
                        <div class="about-title">
                            <span>About Us</span>
                            <h2>An Aid Agency For Your Physical And Mental Well-Being</h2>
                            <p>
                                Physical and mental well-being are intertwined pillars of a harmonious life. Nurturing
                                physical health through exercise, balanced nutrition, and rest ensures vitality and
                                resilience. Simultaneously, mental well-being thrives with mindfulness, positive self-talk,
                                and healthy coping mechanisms, fostering emotional equilibrium. Striking a balance between
                                the two cultivates a holistic state of wellness, enhancing our capacity to navigate
                                challenges and savor life's joys. Prioritizing both aspects empowers us to lead fulfilling
                                lives with a sense of purpose and vitality.
                            </p>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-checkbox-circle-fill"></i>
                                            <p>Provide More Potential Health</p>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-fill"></i>
                                            <p>Operational Research Transformation</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-checkbox-circle-fill"></i>
                                            <p>Mental Health Solutions</p>
                                        </li>
                                        <li>
                                            <i class="ri-checkbox-circle-fill"></i>
                                            <p>Highly Professional Staff</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-area">
        <div class="container">
            <div class="counter-bg pt-100 pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="counter-card">
                            <h1>
                                <span class="odometer" data-count="16082">00</span>
                                <span class="target">+</span>
                            </h1>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="counter-card">
                            <h1>
                                <span class="odometer" data-count="1879">00</span>
                                <span class="target">+</span>
                            </h1>
                            <p>Total Projects</p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="counter-card">
                            <h1>
                                <span class="odometer" data-count="1586">00</span>
                                <span class="target">+</span>
                            </h1>
                            <p>Worldwide Partner</p>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="counter-card">
                            <h1>
                                <span class="odometer" data-count="1268">00</span>
                                <span class="target">+</span>
                            </h1>
                            <p>Positive Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <div class="contact-doctor-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-doctor-contain" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="contact-title">
                            <span>Contact Us</span>
                            <h2>Contact Our Specialist Doctor At Any Time For Any Of Your Ailments</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-doctor-form" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        {{-- <form
                        > --}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name*"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email*"
                                        required>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" id="phone" class="form-control" placeholder="Phone*"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" id="subject" class="form-control" placeholder="Subject*"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" rows="3" placeholder="Message*" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" onclick="messageSHow()" class="default-btn active">
                                    Send Message
                                </button>
                            </div>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
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
