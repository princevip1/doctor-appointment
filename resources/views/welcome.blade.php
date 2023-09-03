@extends('theme.user.layouts.app')

@section('content')
    <div class="banner-area bg-1">
        <div class="container-fluid">
            <div class="banner-slider owl-carousel owl-theme">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h3 data-aos="fade-up" data-aos-duration="1300" data-aos-delay="200">বাংলাদেশের হাজার হাজার ডাক্তার
                                এবং হাসপাতালের সাথে টেলিমেডিসিন এবং ডাক্তার পরামর্শ পরিষেবা নিন </h3>
                            {{-- <p data-aos="fade-up" data-aos-duration="1300" data-aos-delay="400">There are many variations of
                                passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                by injected humour, or randomised words which don't look even believable.</p> --}}
                            <div class="select-content" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="600">
                                <ul class="d-flex flex-wrap justify-content-between">
                                    {{-- <li>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Find remedy for your condition</option>
                                            <option value="1">Fever</option>
                                            <option value="2">Allergies</option>
                                            <option value="3">Morbidity</option>
                                        </select>
                                    </li> --}}
                                    <li>
                                        <select class="form-select" aria-label="division" onchange="handleDivision(this)">
                                            <option selected>Division</option>
                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                            @endforeach


                                        </select>
                                    </li>
                                    <li>
                                        <select class="form-select" aria-label="depertment"
                                            onchange="handleDepartment(this)">
                                            <option selected>Department</option>

                                            @foreach ($specialities as $item)
                                                <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li>
                                        <button onclick="handleSearch()" type="submit" class="src-btn">
                                            Search<i class="ri-user-search-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-area" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="800">
                                <ul>
                                    <li>
                                        <a href="appoinment.html" class="default-btn btn active mr-20">Book An
                                            Appointment</a>
                                    </li>
                                    {{-- <li>
                                        <a href="about-us.html" class="default-btn btn">More About Us</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="feature" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="900">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        20+ Years Of Excellences
                                                    </li>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        24 Hours Medical Service
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        Multi-Specialty Hospital
                                                    </li>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        Professional Specialist
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="assets/images/banner/banner-1.png" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h3>Get Telemedicine and Doctor Consultation service with thousands of Doctors and Hospitals in
                                Bangladesh.</h3>
                            {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even believable.</p> --}}
                            <div class="select-content">
                                <ul class="d-flex flex-wrap justify-content-between">
                                    {{-- <li>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Find remedy for your condition</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </li> --}}
                                    <li>
                                        <select class="form-select" aria-label="Default select example"
                                            onchange="handleDivision(this)">
                                            <option selected>Division</option>
                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                            @endforeach


                                        </select>
                                    </li>
                                    <li>
                                        <select class="form-select" aria-label="Default select example"
                                            onchange="handleDepartment(this)">
                                            <option selected>Department</option>

                                            @foreach ($specialities as $item)
                                                <option value="{{ $item->_id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li>
                                        <button onclick="handleSearch()" type="submit" class="src-btn">
                                            Search<i class="ri-user-search-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <ul>
                                    <li>
                                        <a href="appoinment.html" class="default-btn btn active mr-20">Book An
                                            Appointment</a>
                                    </li>
                                    {{-- <li>
                                        <a href="about-us.html" class="default-btn btn">More About Us</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="feature">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        20+ Years Of Excellences
                                                    </li>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        24 Hours Medical Service
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        Multi-Specialty Hospital
                                                    </li>
                                                    <li>
                                                        <i class="ri-check-double-line"></i>
                                                        Professional Specialist
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="assets/images/banner/banner-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 
    <div class="featured-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="feature-left-content">
                        <div class="feature-title">
                            <span>Features</span>
                            <h2>Think Hard And Focus On The Patient's Well-Being</h2>
                            <p>There are many variations of variations of passages of Lorem Ipsum available, but the
                                majorityi in some form, by injected humour, or randomised words which don't believable.</p>
                            <a href="about-us.html" class="default-btn btn">More About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center style-feature-box">
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="single-features-card">
                                <div class="icon">
                                    <i class="flaticon-syringe"></i>
                                </div>
                                <h3>Root Canal Treatment</h3>
                                <p>There are many variations of passages words which don't believable.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <div class="single-features-card">
                                <div class="icon">
                                    <i class="flaticon-dentist-1"></i>
                                </div>
                                <h3>Emergency Dentistry</h3>
                                <p>There are many variations of passages words which don't believable.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <div class="single-features-card">
                                <div class="icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <h3>Mental Health Solutions</h3>
                                <p>There are many variations of passages words which don't believable.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                            <div class="single-features-card">
                                <div class="icon">
                                    <i class="flaticon-dentist"></i>
                                </div>
                                <h3>Cosmetic Dentist</h3>
                                <p>There are many variations of passages words which don't believable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="about-area">
        <div class="container">
            <div class="border-top ptb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img mr-20" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <img src="assets/images/about/about-1.png" alt="Image">
                            <div class="experience">
                                <p>30 YEARS OF EXPERIENCE DOCTORS</p>
                                <div class="icon">
                                    <i class="flaticon-expert"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content pl-20" data-aos="fade-left" data-aos-duration="1200"
                            data-aos-delay="200">
                            <div class="about-title">
                                <span>About Us</span>
                                <h2>An Aid Agency For Your Physical And Mental Well-Being</h2>
                                <p>Physical and mental well-being are intertwined pillars of a harmonious life. Nurturing
                                    physical health through exercise, balanced nutrition, and rest ensures vitality and
                                    resilience. Simultaneously, mental well-being thrives with mindfulness, positive
                                    self-talk, and healthy coping mechanisms, fostering emotional equilibrium. Striking a
                                    balance between the two cultivates a holistic state of wellness, enhancing our capacity
                                    to navigate challenges and savor life's joys. Prioritizing both aspects empowers us to
                                    lead fulfilling lives with a sense of purpose and vitality.</p>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>
                                        <i class="ri-checkbox-circle-fill"></i>
                                        <p>Provide More Potential Health</p>
                                    </li>
                                    <li>
                                        <i class="ri-checkbox-circle-fill"></i>
                                        <p>Operational Research Transformation</p>
                                    </li>
                                    <li>
                                        <i class="ri-checkbox-circle-fill"></i>
                                        <p>Mental Health Solutions</p>
                                    </li>
                                </ul>
                            </div>
                            {{-- <a href="about-us.html" class="default-btn btn">Explore More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="services-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services-content">
                        <span>Service</span>
                        <h2>Our Best Service And Quite Popular Online Treatment</h2>
                        <p>There are many variations of ariations of passages of Lorem Ipsum available, in injected humour,
                            or randomised words believable.</p>
                        <a href="service.html" class="default-btn btn">View All Services</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="services-slider owl-carousel owl-theme">
                        <div class="single-services-card">
                            <i class="flaticon-orthopedic"></i>
                            <h3>Orthopedic Solutions</h3>
                            <p>According to lorem ipsum dolor amet dui consectetur consecteu don't believable.</p>
                            <a href="service-details.html" class="default-btn btn">Explore More</a>
                        </div>
                        <div class="single-services-card">
                            <i class="flaticon-examination"></i>
                            <h3>Patient Onboarding</h3>
                            <p>According to lorem ipsum dolor amet dui consectetur consecteu don't believable.</p>
                            <a href="service-details.html" class="default-btn btn">Explore More</a>
                        </div>
                        <div class="single-services-card">
                            <i class="flaticon-doctor-2"></i>
                            <h3>Best Advice Doctor</h3>
                            <p>According to lorem ipsum dolor amet dui consectetur consecteu don't believable.</p>
                            <a href="service-details.html" class="default-btn btn">Explore More</a>
                        </div>
                        <div class="single-services-card">
                            <i class="flaticon-patient"></i>
                            <h3>Rapid Improve Patient</h3>
                            <p>According to lorem ipsum dolor amet dui consectetur consecteu don't believable.</p>
                            <a href="service-details.html" class="default-btn btn">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="choose-area ">
        <div class="container-fluid">
            <div class="choose-us-bg bg-color1 ptb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-img pr-20" data-aos="fade-right" data-aos-easing="ease-in-sine"
                            data-aos-duration="1300">
                            <img src="assets/images/choose/choose-1.jpg" alt="Image">
                            <div class="address">
                                <ul>
                                    <li>
                                        <i class="ri-phone-line"></i>
                                        <p>Call Now For Free</p>
                                        <a href="tel:01540035524">(01540035524)</a>
                                    </li>
                                    <li>
                                        <i class="ri-map-pin-line"></i>
                                        <p>Address Here</p>
                                        <span>D-20, Mannan Plaza, 4th Floor, Khilkhet, Dhaka-1215, Bangladesh</span>
                                    </li>
                                    <li>
                                        <i class="ri-time-line"></i>
                                        <p>Opening Hours</p>
                                        <span>Sat-Thu: 8:00am 8:00pm</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content pl-20" data-aos="fade-left" data-aos-easing="ease-in-sine"
                            data-aos-duration="1300">
                            <div class="choose-title">
                                <span>Who We Are</span>
                                <h2>Why Did You Choose Us For All Your Treatments?</h2>
                                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority haven't
                                    in injected humour, or randomised words which don't look even slightly believable.</p> --}}
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="list1">
                                        <ul>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>Top-Quality Treatment Team</p>
                                            </li>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>State Of The Art Dental Services</p>
                                            </li>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>Discount On All Treatment</p>
                                            </li>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>Enrollment Is Quick And Easy</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="list2">
                                        <ul>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>Multi-Specialty Hospital</p>
                                            </li>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>Professional Specialist</p>
                                            </li>
                                            <li>
                                                <i class="ri-checkbox-circle-line"></i>
                                                <p>20+ Years Of Excellence</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="/contact" class="default-btn btn">Contact Us <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="advice-area pt-for-responsive pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="advice-content pr-20" data-aos="fade-right" data-aos-duration="1300"
                        data-aos-delay="300">
                        <div class="advice-title">
                            <span>Online Advice</span>
                            <h2>Find Doctor Online Today And Skip The Waiting Room</h2>
                            <p>Long queues are not necessary for you to wait in.Simply make a reservation on our website and
                                speak with one of our Telemedicine doctors.</p>
                        </div>
                        <div class="list">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-phone-line"></i>
                                            <p>Call Now For Free</p>
                                            <a href="tel:01540035524">(01540035524)</a>
                                        </li>
                                        <li>
                                            <i class="ri-map-pin-user-line"></i>
                                            <p>Address Here</p>
                                            <span>D-20, Mannan Plaza, 4th Floor, Khilkhet, Dhaka-1215, Bangladesh</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <ul>
                                        <li>
                                            <i class="ri-time-line"></i>
                                            <p>Opening Hours</p>
                                            <span>Sat-Thu: 8:00am 8:00pm</span>
                                        </li>
                                        <li>
                                            <i class="ri-exchange-dollar-line"></i>
                                            <p>Easy Money Back</p>
                                            <span>Guarantee Money Return</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="default-btn btn">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advice-img pl-20" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="300">
                        <img src="assets/images/advice/advice-1.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="doctors-area">
        <div class="container-fluid">
            <div class="doctor-content pt-100 pb-70 bg-color1">
                <div class="section-title">
                    <span class="top-title">Our Doctors</span>
                    <h2>Our Science And Specialist Doctor</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-doctor-card" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="200">
                            <div class="doctor-img">
                                <img src="assets/images/doctor/doctor-1.jpg" alt="Image">
                            </div>
                            <div class="doctor-card-content">
                                <h3>Dr.Lowell Deckow</h3>
                                <p>Neurologiest</p>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-doctor-card" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="400">
                            <div class="doctor-img">
                                <img src="assets/images/doctor/doctor-2.jpg" alt="Image">
                            </div>
                            <div class="doctor-card-content">
                                <h3>Dr.Chesley Tromp</h3>
                                <p>Medicine</p>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-doctor-card" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="600">
                            <div class="doctor-img">
                                <img src="assets/images/doctor/doctor-3.jpg" alt="Image">
                            </div>
                            <div class="doctor-card-content">
                                <h3>Dr.Amber Denesik</h3>
                                <p>Cardiologist</p>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-doctor-card" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="800">
                            <div class="doctor-img">
                                <img src="assets/images/doctor/doctor-4.jpg" alt="Image">
                            </div>
                            <div class="doctor-card-content">
                                <h3>Dr.Arden Gerlach</h3>
                                <p>Allergies</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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

    <script>
        var division = ''
        var department = ''

        function handleDivision(val) {
            division = val.value
        }

        function handleDepartment(val) {
            department = val.value
        }

        function handleSearch() {
            window.location.href = '/doctor?division=' + division + '&department=' + department
            console.log('searching...')
        }
    </script>
@endsection

@section('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection
