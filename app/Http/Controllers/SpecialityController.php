<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function index()
    {
        $items = Speciality::all();
        return view('theme.admin.speciality.index', compact('items'));
    }
    public function store(Request $request)
    {
        $item = new Speciality();
        if ($request->_id) {
            $item = Speciality::find($request->_id);
        }
        $item->name = $request->name;
        $item->save();
        $message = "Speciality Added Successfully";
        if ($request->_id) {
            $message = "Speciality Updated Successfully";
        }

        return redirect()->route('speciality.list')->with('message', $message);
    }
    public function delete($id)
    {
        $item = Speciality::find($id);
        $item->delete();
        return redirect()->route('speciality.list')->with('message', 'Speciality Deleted Successfully');
    }
}
