<head>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
@extends('layouts.app')

@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @include('flashMessages.messages')
                    <div class="card main-card">
                        <div class="card-header">
                            <h4 class="title">لوحة التحكم</h4>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col-md-4  ml-auto">
                                <div class="card text-center bg-secondary text-white mb-5">
                                    <div class="counter-block card-body">
                                        <h5>عدد الأدمن</h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-users"></i> 6
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="card text-center bg-secondary text-white mb-5 ">
                                    <div class="counter-block card-body">
                                        <h5>الأصناف</h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-cubes"></i> 6
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="card text-center bg-secondary text-white mb-5 ">
                                    <div class="counter-block card-body">
                                        <h5>الفواتير</h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-credit-card"></i> 6
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar -->
             @include('layouts.sidebar')
            </div>
    </div>
    </div>
@endsection
