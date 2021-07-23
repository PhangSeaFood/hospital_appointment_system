<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login/doctor', [App\Http\Controllers\Auth\LoginController::class, 'showDoctorLoginForm']);
Route::get('/login/nurse', [App\Http\Controllers\Auth\LoginController::class, 'showNurseLoginForm']);
Route::post('/login/doctor', [App\Http\Controllers\Auth\LoginController::class, 'doctorLogin']);
Route::post('/login/nurse', [App\Http\Controllers\Auth\LoginController::class, 'nurseLogin']);

Route::get('/patient/{user}', [App\Http\Controllers\PatientsController::class, 'index'])->name('patient.show');

Route::get('/a/create',[App\Http\Controllers\AppointmentsController::class, 'create']);
Route::post('/a',[App\Http\Controllers\AppointmentsController::class, 'store']);
Route::get('/a/{appointment}', [App\Http\Controllers\AppointmentsController::class, 'show']);

Route::view('/doctor', 'doctor');
Route::view('/nurse', 'nurse');

Route::get('/nurse/AptmList',[App\Http\Controllers\NursesController::class, 'index']);
Route::get('/nurse/AptmList/{appointment}/edit',[App\Http\Controllers\NursesController::class, 'edit']);
Route::patch('/nurse/AptmList/{appointment}',[App\Http\Controllers\NursesController::class, 'update']);
