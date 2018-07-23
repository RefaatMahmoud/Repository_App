@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">إضافة صنف جديد</li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <form class="inputUserData" method="post" action="/categories">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <legend class="mb-4">بيانات الصنف الجديد</legend>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="name" required value="{{old('name')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">اسم الصنف</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="" name="quantity" required value="{{old('quantity')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">الكمية</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <select name="type" class="form-control">
                                                    <option value="كيلو">كيلو</option>
                                                    <option value="سيخ">سيخ</option>
                                                </select>
                                            </div>
                                            <label class="col-sm-2 col-form-label">اختار النوع</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"placeholder="" name="price" required value="{{old('price')}}">
                                            </div>
                                            <label class="col-sm-2 col-form-label">سعر الواحدة</label>
                                        </div>
                                        <button type="submit" class="btn  btn-info "> إضافة صنف جديد <i class="fa fa-plus"></i></button>
                                    </fieldset>
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