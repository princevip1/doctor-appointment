<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Division;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $divisions = Division::all();
        $specialities = Speciality::all();
        $doctors = Doctor::limit(4)->get();
        return view('welcome', compact('divisions', 'specialities', 'doctors'));
    }
    public function about()
    {
        return view('theme.user.about.index');
    }
    public function doctor(Request $request)
    {
        // limit 4
        $doctors = Doctor::all()->take(20);

        // dd($request->all());
        if ($request->division) {
            $doctors = Doctor::where('division', $request->division)->get();
        }


        if ($request->department) {
            $doctors = Doctor::where('speciality', $request->department)->get();
        }
        if ($request->department && $request->division) {

            $doctors = Doctor::where('speciality', $request->department)->where('division', $request->division)->get();
        }


        $divisions = Division::all();
        $specialities = Speciality::all();

        return view('theme.user.doctor.index', compact('doctors', 'divisions', 'specialities'));
    }
    public function doctor_details($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return redirect()->route('welcome');
        }

        $popular_doctors = Doctor::limit(4)->get();
        return view('theme.user.doctor_details.index', compact('doctor', 'popular_doctors'));
    }
    public function contact()
    {
        return view('theme.user.contact.index');
    }
    public function admin()
    {
        return view('theme.admin.dashboard.index');
    }
    public function congratulation(Request $request)
    {
        if (!$request->appointment) {
            return redirect()->route('welcome');
        }

        $appointment = Appointment::find($request->appointment);
        $doctor = Doctor::find($appointment->doctor_id);
        return view('theme.user.congratulation.index', compact('appointment', 'doctor'));
    }
    public function track(Request $request)
    {
        $appointments = [];

        if ($request->phone_or_appoint) {

            $appointments = Appointment::where('phone', $request->phone_or_appoint)->orWhere('appointment_id', $request->phone_or_appoint)->get();
            // return with query string
            return view('theme.user.track.index', ['appoint' => $request->phone_or_appoint])->with('appointments', $appointments);
        }
        return view('theme.user.track.index', ['appoint' => $request->phone_or_appoint], compact('appointments'));
    }
}
