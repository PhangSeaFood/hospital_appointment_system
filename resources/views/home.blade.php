@extends('layouts.app')

@section('content')
<div class="container">

    <div class="h1">Hello, {{ $user->name }}</div>
    
    <button class="btn btn-primary p-5" onclick="location.href='/a/create'">Make Appointment</button>

    <!-- Appointment Table -->
    <div class="h3 mt-5">Appointment List</div>
    <table class="table table-bordered bg-white table-striped">
        <tr>
            <th>No.</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        @foreach ($user->appointments as $appointment)

        <tr>
            <td style="width: 5%;">{{ $i++ }}</td>
            <td>{{ $appointment->a_date }}</td>
            <td>{{ $appointment->a_time }}</td>
            <td style="width: 10%;">
                <?php $converted_apm = $appointment->status ? 'Done' : 'Pending'; ?>
                {{ $converted_apm }}
            </td>
            <td style="width: 9%;">
                <button class="btn btn-success" onclick="location.href='/a/{{ $appointment->id }}'">View</button>
            </td>
        </tr>

        @endforeach

    </table>
</div>
@endsection
