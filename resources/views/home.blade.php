@extends('layouts.app')

@section('content')
<div class="container" style="padding: 111px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-info"><h5>Student Dashboard</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 textbody">
                                   <form class="form-group" style="padding: 20px;" method="post" action="/order" enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="font-size: 20px" class="">Do you have an order?</h4>
                                        <input id="nsu_id" type="number" class="form-control{{ $errors->has('nsu_id') ? ' is-invalid' : '' }}" name="nsu_id" value="{{ old('nsu_id') }}" required autofocus placeholder="Enter Your ID">
                                        <button type="submit" class="btn btn-success mt-2">Place Order</button>
                                    </form>
                                </div>
                            </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
