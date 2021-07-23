<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PatientsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(User $user)
    {
      $this->authorize('view', $user);

      return view('home', compact('user'));
    }
}
