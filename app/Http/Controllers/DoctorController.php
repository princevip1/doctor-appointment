<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $items = Doctor::all();
        $specialities = Speciality::all();
        $divisions = Division::all();
        return view('theme.admin.doctor.index', compact('items', 'specialities', 'divisions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'speciality' => 'required',
            'division' => 'required',
            'name' => 'required',
            'description' => 'required',
            'chember' => 'required',
            'about' => 'required',
        ]);

        $imageName = "default.png";

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/doctor'), $imageName);
        }

        $speciality_name = Speciality::find($request->speciality)->name;
        $division_name = Division::find($request->division)->name;
        $item = new Doctor();
        if ($request->_id) {
            $item = Doctor::find($request->_id);
        }

        $item->speciality_name = $speciality_name;
        $item->speciality = $request->speciality;
        $item->division_name = $division_name;
        $item->division = $request->division;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->chember = $request->chember;
        $item->about = $request->about;
        $item->image = $imageName;
        $item->save();
        $message = "Doctor Added Successfully";
        if ($request->_id) {
            $message = "Doctor Updated Successfully";
        }

        return redirect()->route('doctor.list')->with('message', $message);
    }
    public function delete($id)
    {
        $item = Doctor::find($id);

        // unlink image

        if ($item->image == 'default.png') {
            $item->delete();
            return redirect()->route('doctor.list')->with('message', 'Doctor Deleted Successfully');
        }

        $image = public_path('images/doctor/' . $item->image);
        if (file_exists($image)) {
            @unlink($image);
        }


        $item->delete();
        return redirect()->route('doctor.list')->with('message', 'Doctor Deleted Successfully');
    }
}
