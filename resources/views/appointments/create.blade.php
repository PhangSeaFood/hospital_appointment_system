@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make Appointment</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/a">
                        @csrf

                        <label class="col-md-4 col-form-label">Date & Time</label>
            
                        <div class="col-12 d-flex">

                            <input id="a_date" type="date" 
                            class="form-control @error('a_date') is-invalid @enderror" 
                            name="a_date" 
                            value="{{ old('a_date') }}" 
                            autocomplete="a_date" autofocus>

                            @error('a_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="a_time" type="time" 
                            class="form-control @error('a_time') is-invalid @enderror" 
                            name="a_time" 
                            value="{{ old('a_time') }}" 
                            autocomplete="a_time" autofocus>

                            @error('a_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="pt-4">
                            <div class="col-12">
                                <button class="btn btn-primary">Make Appointment</button>
                                
                                
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
