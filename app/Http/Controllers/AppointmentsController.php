<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Appointment;

class AppointmentsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create(User $user)
    {
        return view('appointments.create', compact('user'));
    }

    public function store()
    {
        $data = request()->validate([
            'a_date' => 'required',
            'a_time' => 'required',
            'a_code' => '',
            'status' => ''
        ]);

        $random = Str::random(10);

        auth()->user()->appointments()->create([
            'a_date' => $data['a_date'],
            'a_time' => $data['a_time'],
            'a_code' => $random,
            'status' => false,
        ]);

        //dd(request()->all());
        
        return redirect('/patient/'. auth()->user()->id);
    }

    public function show(Appointment $appointment)
    {
        $this->authorize('view', $appointment);

        return view('appointments.show', compact('appointment'));
    }

    
}
