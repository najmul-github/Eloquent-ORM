@extends('layouts.app')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@section('content')
<div class="container" style="padding: 5.3%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="integer" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Student Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                    
                        
                        {{-- clone start from here --}}  
                        <div class="parent">
                            <div id="form-set">
                                <div class="form-group row">
                                    <label for="course_id" class="col-md-4 col-form-label text-md-right">{{ __('Course ID') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="course_id" type="number" class="form-control" name="course_id[]" value="{{ old('course_id') }}" required autocomplete="course_id" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('Course & Section') }}</label>
        
                                    <div class="col-md-3">
                                        <select type="text" class="form-control" name="course_name[]">
                                            <option>Course</option>
                                            <option>cse 115</option>
                                            <option>cse 215</option>
                                            <option>cse 311</option>
                                            <option>cse 411</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select type="number" class="form-control" name="section[]">
                                            <option>Section</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="Class Timing" class="col-md-4 col-form-label text-md-right">{{ __('Class Timing') }}</label>
        
                                    <div class="col-md-3">
                                        <select type="text" class="form-control" name="class_start[]">
                                            <option>Start</option>
                                            <option>08:00 AM</option>
                                            <option>09:40 AM</option>
                                            <option>11:20 AM</option>
                                            <option>01:00 PM</option>
                                            <option>02:40 PM</option>
                                            <option>04:20 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select type="text" class="form-control" name="class_end[]" >
                                            <option>End</option>
                                            <option>09:30 AM</option>
                                            <option>11:10 AM</option>
                                            <option>12:50 PM</option>
                                            <option>02:30 PM</option>
                                            <option>04:10 PM</option>
                                            <option>05:50 PM</option>
                                        </select>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="form-group row justify-content-center"  style="margin-top: -11%">
                            <div class="col-md-10" style="visibility: hidden"></div>
                            <div class="col-md-2">
                                <button class="btn btn-xs btn-success" id="add">Add</button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#add').click(function(e) {
                                    e.preventDefault();
                                    $("#form-set").clone().appendTo(".parent");
                                });
                            });
                        </script>
                   {{-- Clone end here --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
