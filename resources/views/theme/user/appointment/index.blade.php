@extends('theme.user.layouts.app')

@section('content')
    <div class="appoinment-area ptb-50">
        <div class="container">
            <div class="information">
                <div class="">
                    <h5>{{ $doctor->name }}</h5>
                    <span>{{ $doctor->speciality_name }}</span>
                    <p>{{ $doctor->chember }}</p>
                </div>
                <br>
                <h3>Book Your Appointment</h3>

                @if (Session::has('error'))
                    <p style="color:red;"> {{ Session::get('error') }}</p>
                @endif

                <form action="{{ route('appointment.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $doctor->_id }}" name="doctor">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name*" name="name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number*" name="phone" />
                            </div>
                        </div>
                        <div class="gender">
                            <ul>
                                <li>
                                    <span>Gender:</span>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value id="flexCheckDefault"
                                            name="male" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Male
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value id="flexCheckChecked"
                                            name="female" />
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Female
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value id="flexCheckDefault2"
                                            name="custom" />
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            Custom
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <div style="margin-top: 23px" class="form-group">
                                    <input type="date" class="form-control" name="data" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <span style="color:#0cb8b6;">(Please mind visiting hours while booking)</span>
                                <div class="form-group">
                                    <input type="time" class="form-control" name="time" />
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Make A Note To The Doctor (Optional Message) *"
                                    name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="default-btn active">
                                Book Appointment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
