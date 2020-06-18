@extends('layouts.app')

@section('content')
<div class="container" style="padding: 111px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Student Dashboard</div>
                        <div class="col-md-6 text-right">
                            <a style="color:#fff" href="/students/{{ Auth::user()->id }}" type="button" class="btn btn-info">Profile</a>
                            <a style="color:#fff" href="/orders" type="button" class="btn btn-info">Orders</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                       <div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 textbody">
                                   <form class="form-group" style="padding: 20px;" method="post" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h4 style="font-size: 20px" class="">Do you have an order?</h4>
                                        <input id="id" type="number" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus placeholder="Enter Your ID">
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
