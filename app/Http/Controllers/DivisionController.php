<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $items = Division::all();
        return view('theme.admin.division.index', compact('items'));
    }
    public function store(Request $request)
    {
        $item = new Division();
        if ($request->_id) {
            $item = Division::find($request->_id);
        }
        $item->name = $request->name;
        $item->save();
        $message = "division Added Successfully";
        if ($request->_id) {
            $message = "division Updated Successfully";
        }

        return redirect()->route('division.list')->with('message', $message);
    }
    public function delete($id)
    {
        $item = Division::find($id);
        $item->delete();
        return redirect()->route('division.list')->with('message', 'division Deleted Successfully');
    }
}
