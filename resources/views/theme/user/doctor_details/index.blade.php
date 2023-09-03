@extends('theme.user.layouts.app')


@section('content')
  
    <div class="blog-Details-area pt-10 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-20">
                    <div class="details">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="details-top-img">
                                    <img width="400px" src="{{ asset('images/doctor/' . $doctor->image) }}" alt="Image" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="details-top-img">
                                    <h3>{{ $doctor->name }}</h3>
                                    <p style="color:#0cb8b6;">{{ $doctor->speciality_name }}</p>
                                    <p>{{ $doctor->description }}</p>

                                     <a href="{{route('appointment',$doctor->_id)}}" class="default-btn btn">Get An Appointment</a>
                                </div>
                            </div>
                        </div>

                        <div class="details-content">
                            <ul class="admin-and-date">
                                <li>
                                    <i class="ri-user-voice-line"></i>
                                    <p>By <a href="#">Admin</a></p>
                                </li>
                                <li>
                                    <i class="ri-calendar-event-line"></i>
                                    <p>07 - Feb - 2022</p>
                                </li>
                            </ul>


                            <div class="blog-quote">
                                <h4>Chamber</h4>
                                <p>
                                    {{ $doctor->chember }}
                                </p>
                                <span>{{ $doctor->name }}</span>
                            </div>


                            <div class="telehealth-services">
                                <h3>About</h3>
                                <p>
                                    {{ $doctor->about }}
                                </p>

                            </div>


                            <div class="tags">
                                <ul>
                                    <li>Specialist</li>
                                    <li><a href="service.html">{{ $doctor->speciality_name }}</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="next-and-prev">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <a href="#">
                                        <i class="ri-arrow-left-line"></i>
                                        Previous Post
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Next
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="reply-content">
                            <h3>Leave A Reply</h3>
                            <p>
                                Your email address will not be published. Required fields are
                                marked*
                            </p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email*" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Save my name, email,and website in this browser for the
                                        next time
                                    </label>
                                </div>
                                <button type="submit" class="default-btn active">
                                    Post A Comment
                                </button>
                            </form>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 pl-20">
                    {{-- <div class="search-content">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Here*" />
                            <button type="submit" class="src-btn">
                                <i class="ri-search-eye-line"></i>
                            </button>
                        </div>
                    </div> --}}
                    <div class="popular-post">
                        <h3>Popular Doctors</h3>
                        @foreach ($popular_doctors as $item)
                            <div class="popular-card">
                                <div class="img">
                                    <a href="{{ route('doctor_details', $item->_id) }}">
                                        <img width="70px"
                                            src="{{ asset('images/doctor/' . $item->image) }}"alt="Image" />
                                    </a>
                                </div>
                                <a href="blog.html">
                                    <h4>{{ $item->name }}</h4>
                                </a>
                                <div class="date">
                                    <i class="ri-calendar-event-line"></i>
                                    <p>{{ $item->speciality_name }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{-- <div class="categories">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Articles</p>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Masterchef</p>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Months</p>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Productive</p>
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <i class="ri-checkbox-fill"></i>
                                    <p>Binta</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tag-content">
                        <h3>Tags:</h3>
                        <ul>
                            <li><a href="service.html">Design</a></li>
                            <li><a href="service.html">Fashion</a></li>
                            <li><a href="service.html">Productive</a></li>
                            <li><a href="service.html">Commercial</a></li>
                            <li><a href="service.html">Marketing</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
