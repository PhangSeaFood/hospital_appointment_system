@extends('layouts.auth')

@section('content')
<div class="container">
    
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            Hi Nurse!
        </div>
    </div>

    <div class="btn btn-primary mt-3" onclick="location.href='/nurse/AptmList'">Appointment List</div>


        
</div>
@endsection