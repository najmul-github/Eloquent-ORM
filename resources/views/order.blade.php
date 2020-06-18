@extends('layouts.app')

@section('content')
<div class="container" style="padding: 111px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Dashboard</div>
                        <div class="col-md-6 text-right">
                            <a style="color:#fff" href="/home" type="button" class="btn btn-info">Back</a>
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
                                <div class="col-md-1"></div>
                                <div class="col-md-10 textbody">
                                    <h3 class="text-center p-2 text-info" style="font-size: 23px;">Orders</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Order ID</th>
                                                        <th>Student ID</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($orders as $order)
                                                        <tr>
                                                           <td>{{ $loop->iteration }}</td>
                                                           <td>{{$order->student_id}}</td>
                                                           <td>{{'Pending'}}</td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
