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
