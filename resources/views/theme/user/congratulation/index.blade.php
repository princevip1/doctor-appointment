 @extends('theme.user.layouts.app')
 @section('content')
     <div class="appoinment-area ptb-50">
         <div class="container">
             <div style="width: 650px" class="information">
                 <div>
                     <div class="">
                         <div style="text-align: center">
                             <h2>
                                 Congratulations!
                             </h2>
                             <p>Your Appointment with doctor <strong  style="color: #0FB8B6">{{ $doctor->name }}</strong> is Confirmed</p>
                         </div>
                         <br>
                         <div class="row">
                             <div class="col-md-6">
                                 <p><i style="color: #0FB8B6" class="ri-check-double-line"></i> Your Appointment ID is: <strong>{{ $appointment->appointment_id }}</strong> </p>
                                 <p><i style="color: #0FB8B6" class="ri-check-double-line"></i>  Appointment date : <strong>{{ $appointment->data }}</strong> </p>
                             </div>
                             <div class="col-md-6">
                                 <p><i style="color: #0FB8B6" class="ri-check-double-line"></i>  Appointment time : <strong>{{ $appointment->time }}</strong> </p>
                                 <p><i style="color: #0FB8B6" class="ri-check-double-line"></i>  Please be present 15 minutes Ahed.</p>
                             </div>

                         </div>

                         <br>
                         <br>

                          <a href="/" class="default-btn btn">Back To Home</a>


                     </div>
                 </div>

             </div>
         </div>
     </div>
 @endsection
