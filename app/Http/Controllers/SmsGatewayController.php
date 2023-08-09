<?php

namespace App\Http\Controllers;

use App\Models\SmsGateway;
use Illuminate\Http\Request;

class SmsGatewayController extends Controller
{
    public function index()
    {
        $items = SmsGateway::all();
        return view('theme.admin.sms_gateway.index', compact('items'));
    }
    public function store(Request $request)
    {
        $item = new SmsGateway();
        if ($request->_id) {
            $item = SmsGateway::find($request->_id);
        }
        $item->name = $request->name;
        $item->host = $request->host;
        $item->api_key = $request->api_key;
        $item->body = $request->body;
        $item->user_name = $request->user_name;
        $item->password = $request->password;
        $item->save();
        $message = "sms_gateway Added Successfully";
        if ($request->_id) {
            $message = "sms_gateway Updated Successfully";
        }

        return redirect()->route('smsGateway.list')->with('message', $message);
    }
    public function delete($id)
    {
        $item = SmsGateway::find($id);
        $item->delete();
        return redirect()->route('smsGateway.list')->with('message', 'sms_gateway Deleted Successfully');
    }
}
