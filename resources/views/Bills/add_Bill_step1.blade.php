@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"> الخطوة الاولى</li>
                                <li class="breadcrumb-item"><a href="#">عمل فاتوره جديده</a></li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <form id="form" class="inputUserData" method="post" action="/add_Bill_step1">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <legend class="mb-4">إدخال بيانات العميل </legend>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="clientName"  value="{{old('clientName')}}" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label">اسم العميل</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="address"  value="{{old('address')}}" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label">العنوان</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="date"  value="{{old('date')}}" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label">التاريخ</label>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn  btn-info "> الخطوة الثانية <i class="fa fa-step-backward"></i></button>
                                </form>
                                <br>
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
