@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1><strong>Appointment</strong></h1>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">
                            <h3><strong>Code</strong></h3>
                        </label>

                        <div class="col-12 h4">
                            {{ QrCode::size(200)->generate($appointment->a_code); }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">
                            <h3><strong>Patient Name</strong></h3>
                        </label>

                        <div class="col-12 h4">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">
                            <h3><strong>Date</strong></h3>
                        </label>

                        <div class="col-12 h4">
                            {{ $appointment->a_date }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">
                            <h3><strong>Time</strong></h3>
                        </label>

                        <div class="col-12 h4">
                            {{ $appointment->a_time }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">
                            <h3><strong>Status</strong></h3>
                        </label>

                        <div class="col-12 h4">
                            <?php $converted_apm = $appointment->status ? 'Done' : 'Pending'; ?>
                            {{ $converted_apm }}
                        </div>
                    </div>

                </div>
                
            </div>
        </div> 
    </div>
</div>

@endsection