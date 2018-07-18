@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">تواصل معانا</li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>

                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col ml-auto">
                                <div class="card text-center bg-secondary text-white mb-5 ">
                                    <div class="card-body">
                                        <p class="lead">تسطيع التواصل معنا اذا وجهتك اي مشكلة في التطبيق و اذا كنت تريد تطوير البرنامج بوجه عام</p>
                                        <p> refaat.aish.fciscu1@gmail.com  : الميل </p>
                                        <p> رقم الهاتف :  01003616844</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
@endsection