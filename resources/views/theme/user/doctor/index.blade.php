@extends('theme.user.layouts.app')

@section('content')
    @php
        $division = Request::get('division');
        $department = Request::get('department');
    @endphp

    <div style="padding-top: 40px" class="banner-slider owl-carousel owl-theme bg-color1">
        <div class="row align-items-center">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="banner-content">
                    <div class="select-content">
                        <ul class="d-flex flex-wrap justify-content-between">
                            <li>
                                <select class="form-select" aria-label="Default select example"
                                    onchange="handleDivision(this)">
                                    <option selected>Division</option>
                                    @foreach ($divisions as $item)
                                        <option value="{{ $item->_id }}" {{ $division == $item->_id ? 'selected' : '' }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <select class="form-select" aria-label="Default select example"
                                    onchange="handleDepartment(this)">
                                    <option selected>Department</option>
                                    @foreach ($specialities as $item)
                                        <option value="{{ $item->_id }}"
                                            {{ $department == $item->_id ? 'selected' : '' }}>{{ $item->name }}</option>
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
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>


    <div style="padding-top: 40px" class="doctor-area">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Our Doctors</span>
                <h2>Our Best Doctors & Popular Physicists</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($doctors as $item)
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <a href="{{ route('doctor_details', $item->_id) }}">
                            <div class="single-doctor-card style">
                                <div style="height: 300px" class="doctor-img">
                                    <img src="{{ asset('images/doctor/' . $item->image) }}" alt="Image" />
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
                                <div class="doctor-card-content">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->speciality_name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- if doctors lenth  --}}

                @if (count($doctors) == 0)
                    <div class="col-lg-12">
                        <div class="single-doctor-card style">
                            <div class="doctor-card-content">
                                <h3>No Doctor Found</h3>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-6.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Bonita Schaden</h3>
                            <p>Cardiologist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-7.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Fletcher Waelchi</h3>
                            <p>Medicine</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-8.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Fredrick Auer</h3>
                            <p>Orthopedics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-9.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Sarai Conn</h3>
                            <p>Design Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-10.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Jasen Huels</h3>
                            <p>Dental Surgery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-11.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Maureen Klein</h3>
                            <p>Oral Surgery</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
                    <div class="single-doctor-card style">
                        <div class="doctor-img">
                            <img src="assets/images/doctor/doctor-12.jpg" alt="Image" />
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
                        <div class="doctor-card-content">
                            <h3>Dr.Cedrick Spencer</h3>
                            <p>Hygienists</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection


@section('script')
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
