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
        $doctors = Doctor::all();

        if ($request->division) {
            $doctors = $doctors->where('division', $request->division);
        }
        if ($request->speciality) {
            $doctors = $doctors->where('speciality', $request->speciality);
        }
        if ($request->speciality && $request->division) {
            $doctors = $doctors->where('speciality', $request->speciality)->where('division', $request->division);
        }

        $divisions = Division::all();
        $specialities = Speciality::all();

        return view('theme.user.doctor.index', compact('doctors', 'divisions', 'specialities'));
    }
    public function doctor_details($id)
    {
        $doctor = Doctor::find($id);
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
}
