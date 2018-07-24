<head>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
@extends('layouts.app')

@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('flashMessages.messages')
                    <div class="card main-card">
                        <div class="card-header">
                            <h4 class="title">لوحة التحكم</h4>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="card text-center bg-secondary text-white mb-5 ">
                                    <div class="counter-block card-body">
                                        <h5>عدد الأصناف</h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-cubes"></i>
                                            {{count(App\Categories::all())}}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center bg-secondary text-white mb-5 ">
                                    <div class="counter-block card-body">
                                        <h5>عدد الفواتير </h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-credit-card"></i>
                                            {{count(App\Client::all())}}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center bg-secondary text-white mb-5">
                                    <div class="counter-block card-body">
                                        <h5>عدد الأدمن</h5>
                                        <h1 class="display-5">
                                            <i class="fa fa-users"></i>
                                            {{count(App\User::all())}}
                                        </h1>
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
