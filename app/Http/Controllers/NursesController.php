<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;

class NursesController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();

        return view('nurses.aptmList', ['appointments'=>$appointments]);
    }

    public function edit(Appointment $appointment)
    {

        return view('nurses.edit', compact('appointment'));
    }

    public function update(Appointment $appointment)
    {
        /*
        $body =  $request->all();
        $appointment = new Appointment;
        $appointment->user_id = $body["user_id"];
        $appointment->a_time = $body["a_time"];
        $appointment->a_date = $body["a_date"];
        $appointment->a_code = $body["a_code"];
        $appointment->status = $body["status"];
        $appointment->save();
        */

        $data = request()->validate([
            'user_id' => 'required',
            'a_time' => 'required',
            'a_date' => 'required',
            'a_code' => 'required',
            'status' => ''
        ]);

        $appointment->update(array_merge(
            $data
        ));

        return redirect("/nurse/AptmList");
    }
}
