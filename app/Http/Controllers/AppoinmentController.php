<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\SmsGateway;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AppoinmentController extends Controller
{
    public function appointment($did)
    {
        if (!$did) {
            return redirect()->route('welcome');
        }
        $doctor = Doctor::find($did);
        return view('theme.user.appointment.index', compact('doctor'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'data' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);

        $doctor = Doctor::find($request->doctor);

        $is_appointment = Appointment::where('doctor_id', $doctor->id)
            ->where('data', $request->data)
            ->where('phone', $request->phone)
            ->first();

        if ($is_appointment) {
            return redirect()->back()->with('error', 'You have already taken an appointment');
        }


        $appointment = new Appointment();
        $appointment->doctor_id = $doctor->id;
        $appointment->doctor_name = $doctor->name;
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->data = $request->data;
        $appointment->time = $request->time;
        $appointment->message = $request->message;
        $appointment->otp = random_int(1000, 9999);
        $appointment->appointment_id = "ADB-"
            . random_int(100000, 999999);
        $appointment->status = "pending";
        $appointment->otp_status = "pending";
        $check_phone = substr($appointment->phone, 0, 2);
        $phone =  $appointment->phone;
        if ($check_phone == '01' && strlen($appointment->phone) == 11) {
            $pattern = '/^01/i';
            $phone = preg_replace($pattern, '8801', $appointment->phone);
        } else {
            return redirect()->back()->with('error', 'Please enter valid phone number');
        }

        $gateway = SmsGateway::first();
        $pattern = '/{#}/i';
        $message = preg_replace($pattern, $appointment->otp, $gateway->body);
        // check phone number start with 01 or not
        $client = new Client();
        $res = $client->request('GET', $gateway->host, [
            'query' => [
                'apiKey' => $gateway->api_key,
                'destination' => $phone,
                'message' => $message
            ],
        ]);

        if ($res->getStatusCode() == 200) {
            $appointment->otp_status = "success";
            $appointment->save();
            return redirect()->route('appointment.otp', compact('doctor', 'appointment'))->with('message', 'OTP sent successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');
    }


    public function otp(Request $request)
    {
        $doctor = Doctor::find($request->doctor);
        $appointment = Appointment::find($request->appointment);

        if ($appointment->status == "success") {
            return redirect()->route('welcome')->with('message', 'Appointment created successfully');
        }

        return view('theme.user.appointment_otp.index', compact('doctor', 'appointment'));
    }
    public function otp_check(Request $request)
    {
        $appointment = Appointment::find($request->appointment);

        if ($appointment->status == "success") {
            return redirect()->route('congratulation', compact('appointment'))->with('message', 'Appointment created successfully');
        }

        if ($appointment->otp == $request->otp) {
            $appointment->status = "success";
            $appointment->save();
            return redirect()->route('congratulation', compact('appointment'))->with('message', 'Appointment created successfully');
        }
        return redirect()->back()->with('error', 'OTP not matched');
    }
}
