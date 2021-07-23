@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Appointment</div>

                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/nurse/AptmList/{{ $appointment->id }}">
                        @csrf
                        @method('PATCH')

                        <label class="col-md-4 col-form-label"><strong>User ID</strong></label>

                        <div class="col-12 ">

                            <input id="user_id" type="text" 
                                class="form-control @error('user_id') is-invalid @enderror" 
                                name="user_id" 
                                value="{{ old('user_id') ?? $appointment->user_id }}"
                                autocomplete="user_id" autofocus>
            
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <label class="col-md-4 col-form-label"><strong>Date & Time</strong></label>
            
                        <div class="col-12 d-flex">

                            <input id="a_date" type="date" 
                            class="form-control @error('a_date') is-invalid @enderror" 
                            name="a_date" 
                            value="{{ old('a_date') ?? $appointment->a_date }}" 
                            autocomplete="a_date" autofocus>

                            @error('a_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input id="a_time" type="time" 
                            class="form-control @error('a_time') is-invalid @enderror" 
                            name="a_time" 
                            value="{{ old('a_time') ?? $appointment->a_time }}" 
                            autocomplete="a_time" autofocus>

                            @error('a_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <label class="col-md-4 col-form-label"><strong>Code</strong></label>

                        <div class="col-12 ">

                            <input id="a_code" type="text" 
                                class="form-control @error('a_code') is-invalid @enderror" 
                                name="a_code" 
                                value="{{ old('a_code') ?? $appointment->a_code }}"
                                autocomplete="a_code" autofocus>
            
                                @error('a_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <label class="col-md-4 col-form-label"><strong>Status</strong></label>
            
                        <div class="col-12 ">

                            <input type="radio"  id="pending" name="status" value="0" {{ $appointment->status=="0"? "checked" : "" }} >
                            <label for="pending">Pending</label>

                            <br>

                            <input type="radio" id="done" name="status" value="1" {{ $appointment->status=="1"? "checked" : "" }} >
                            <label for="done">Done</label>

                        </div>

                        

                        <div class="pt-4">
                            <div class="col-12">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>

                    <!-- yoyotest
                    <script>
                        function updateStatus() {
                            const id = document.getElementById("user_id").innerHTML;
                            const time = document.getElementById("a_time").innerHTML;
                            const date = document.getElementById("a_date").innerHTML;
                            const code = document.getElementById("a_code").innerHTML;
                            const sta = document.getElementById("status").innerHTML;
                            const updateData = {
                            "_token": "{{ csrf_token() }}",
                                user_id: id,
                                a_time: time,
                                a_date: date,
                                a_code: code,
                                status: sta
                            }
                            console.log(updateData)
                            $.ajax({
                            type: "PATCH",
                            url: '/nurse/AptmList/{{ $appointment->id }}',
                            data: updateData,
                            success: function(data) {
                                alert("Update success.")
                            }
                            })
                        }
                    </script> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection