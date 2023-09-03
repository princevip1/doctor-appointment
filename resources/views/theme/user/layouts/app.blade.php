<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/genh/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 11:45:39 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/meanmenu.css">

    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/flaticon.css">

    <link rel="stylesheet" href="/assets/css/remixicon.css">

    <link rel="stylesheet" href="/assets/css/odometer.min.css">

    <link rel="stylesheet" href="/assets/css/aos.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="/assets/css/dark.css">

    <link rel="stylesheet" href="/assets/css/responsive.css">
    <title>Amar Doctor -Telemedicine & Telehealth Services</title>
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    @yield('css')
</head>

<body>

    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>


    <div class="tob-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heder-left-content">
                        <ul>
                            <li>
                                <i class="ri-user-location-line"></i>
                                <p>Welcome To Amar Doctor</p>
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                <p>Sat - Fri: 8:00 am - 10:00 pm</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="heder-right-content">
                        <ul>
                            <li>
                                <div class="language">
                                    <select>
                                        <option data-display="English">English</option>
                                    </select>
                                    <i class="ri-global-line"></i>
                                </div>
                            </li>
                            <li>
                                <div class="social-content">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/" target="_blank"><i
                                                    class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                    class="ri-instagram-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                    class="ri-linkedin-fill"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area nav-bg-1">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="/assets/images/logo.png" width="100px" class="main-logo" alt="logo">
                            <img src="/assets/images/white-logo.png" width="100px" class="white-logo"
                                alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/images/logo.png" width="100px" class="main-logo" alt="logo">
                        <img src="/assets/images/white-logo.png" width="100px" class="white-logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle active">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="/doctor" class="nav-link">Doctors</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="service.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="doctors.html" class="nav-link">Doctors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="appoinment.html" class="nav-link">Appoinment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonial.html" class="nav-link">Testimonial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Portfolio
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="portfolio.html" class="nav-link">Portfolio</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="portfolio-details.html" class="nav-link">Portfolio
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Users
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="recover-password.html" class="nav-link">Recover Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms And Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="/track" class="nav-link">Track Your Appointment</a>
                            </li>
                        </ul>
                        <div class="others-options">
                            <ul>
                                <li>
                                    <div class="call-now">
                                        <i class="flaticon-phone-call-1"></i>
                                        <p>Call Now For Free</p>
                                        <a href="tel:01540035524">01540035524</a>
                                    </div>
                                </li>

                                @php
                                    $currentPath = Route::getFacadeRoot()
                                        ->current()
                                        ->uri();
                                @endphp

                                @if ($currentPath == '/')
                                    <li>
                                        <a href="/doctor" class="default-btn btn">Get An Appointment</a>
                                    </li>
                                @endif
                                @if ($currentPath != '/')
                                    <li style="width: 200px;">

                                    </li>
                                @endif


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options justify-content-center d-flex align-items-center">
                            <div class="others-options">
                                <ul>
                                    <li>
                                        <div class="call-now">
                                            <i class="flaticon-phone-call-1"></i>
                                            <p>Call Now For Free</p>
                                            <a href="tel:01540035524">01540035524</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="appoinment.html" class="default-btn btn">Get An Appointment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="">
        @yield('content')
    </div>



    <div class="footer-area">
        <div class="container">
            <div class="footer pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="logo-area" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <a href="/"><img width="100px" src="/assets/images/white-logo.png"
                                    alt="Image"></a>
                            <p>There are many variations of passages of in humour, or randomised believable.</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Your Email" name="EMAIL"
                                    required autocomplete="off">
                                <button class="default-btn active" type="submit">
                                    Subscribe
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5"></div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="helpful-link" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <h3>Helpful Links</h3>
                            <ul>
                                <li>
                                    <span>Address:</span>D-20, Mannan Plaza, 4th Floor, Khilkhet, Dhaka-1215, Bangladesh
                                </li>
                                <li>
                                    <span>Phone:</span><a href="tel:01540035524">(01540035524)</a>
                                </li>
                                <li>
                                    <span>Email:</span><a href=""><span class="__cf_email__"
                                            data-cfemail="">info@amardoctor.net</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy">
                            <p>© All right reserved @php
                                echo date('Y');
                                
                            @endphp <a href="https://hibootstrap.com/"
                                    target="_blank">Amar Doctor</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social-content">
                            {{-- <ul>
                                <li><span>Follow Us On</span></li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i
                                            class="ri-twitter-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/?lang=en" target="_blank"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery.min.js"></script>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/js/jquery.meanmenu.js"></script>

    <script src="/assets/js/owl.carousel.min.js"></script>

    <script src="/assets/js/jquery.magnific-popup.js"></script>

    <script src="/assets/js/aos.js"></script>

    <script src="/assets/js/odometer.min.js"></script>

    <script src="/assets/js/appear.min.js"></script>

    <script src="/assets/js/form-validator.min.js"></script>

    <script src="/assets/js/contact-form-script.js"></script>

    <script src="/assets/js/ajaxchimp.min.js"></script>

    <script src="/assets/js/custom.js"></script>
    @yield('script')
</body>

<!-- Mirrored from templates.hibootstrap.com/genh/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 11:45:55 GMT -->

</html>
