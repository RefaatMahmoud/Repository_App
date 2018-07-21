@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">عمل فاتوره جديده</li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <form id="form" class="inputUserData" method="post" action="/addBill">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <legend class="mb-4">بيانات الفاتوره </legend>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="name"  value="{{old('name')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">اسم العميل</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="address"  value="{{old('quantity')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">العنوان</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" placeholder="" name="date"  value="{{old('quantity')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">التاريخ</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control"placeholder="" name="quantity">
                                            </div>
                                            <label class="col-sm-2 col-form-label">الكمية المطلوبة</label>
                                            <div class="col-sm-3">
                                                <select name="type" id="" class="form-control">
                                                    <option value="0">كيلو</option>
                                                    <option value="1">سيخ</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-1 col-form-label">النوع</label>
                                            <div class="col-sm-3">
                                                <select name="category" id="" class="form-control">
                                                    <option value="0">حديد</option>
                                                    <option value="1">ذهب</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-1 col-form-label">صنف</label>
                                        </div>
                                    </fieldset>
                                    <a class="btn  btn-info addItems"> إضافة عناصر جديده <i class="fa fa-plus"></i></a>
                                    <button type="submit" class="btn  btn-info "> إضافة صنف جديد <i class="fa fa-plus"></i></button>
                                </form>
                                <br>
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
