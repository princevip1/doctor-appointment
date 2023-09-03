@extends('theme.user.layouts.app')

@section('content')
    <div class="bg-color1" style="padding: 50px 0px 20px 0px;">
        <div class="row container ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-sm-6">
                <div class="logo-area" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <form class=" " action="{{ route('track') }}" method="post">
                        @csrf
                        <div class="d-flex">
                            <input style="border: 1px solid #0cb8b6; color:#000 ; border-radius:50px" type="text"
                                class="form-control" placeholder="Your Mobile No & Appoint ID" name="phone_or_appoint"
                                required autocomplete="off">
                            <button
                                style="margin-left: -50px;padding: 10px 30px; background-color: #0cb8b6; color:#fff; border: 1px solid #0cb8b6
                        "
                                class="default-btn active" type="submit">
                                Teack
                            </button>
                        </div>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>


                @foreach ($appointments as $item)
                    <div class="appoinment-area ptb-50">
                        <div class="container">
                            <div style="width: 450px" class="information">
                                <div>
                                    <div class="">
                                        <div style="text-align: center">
                                            <h4>
                                                Appointment Details
                                            </h4>
                                            <p>Your Appointment with doctor <strong
                                                    style="color: #0FB8B6">{{ $item->name }}</strong> is Confirmed</p>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p> Doctor Name:
                                                    <strong>{{ $item->doctor_name }}</strong>
                                                </p>
                                                <p> Appointment
                                                    Date : <strong>{{ $item->data }}</strong> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p> Appointment
                                                    time : <strong>{{ $item->time }}</strong> </p>
                                                <p> Appointment
                                                    ID : <strong>{{ $item->appointment_id }}</strong> </p>

                                            </div>

                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <div class="col-lg-3"></div>
        </div>







    </div>
@endsection
