@extends('layouts.auth')

@section('content')
<div class="container">

    <div class="h3">Appointment List</div>

    <table class="table table-bordered bg-white table-striped">
        <tr>
            <th>No.</th>
            <th>Appointment Code</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        @foreach ($appointments as $appointment)

        <tr>
            <td style="width: 5%;">{{ $i++ }}</td>
            <td>{{ $appointment->a_code }}</td>
            <td>{{ $appointment->a_date }}</td>
            <td>{{ $appointment->a_time }}</td>
            <td style="width: 10%;">
                <?php $converted_apm = $appointment->status ? 'Done' : 'Pending'; ?>
                {{ $converted_apm }}
            </td>
            <td style="width: 9%;">
                <button class="btn btn-success" onclick="location.href='/nurse/AptmList/{{ $appointment->id }}/edit'">Edit</button>
            </td>
        </tr>

        @endforeach

    </table>
        
</div>
@endsection