@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">إضافة عضو جديد</li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <form method="POST" action="/register">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <legend>بيانات العضو داخل التطبيق</legend>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>صلاحية العضو</label>
                                                <select class="form-control" name="role" required>
                                                    <option>مشرف</option>
                                                    <option>ادمن</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>اسم العضو</label>
                                                <input type="text" class="form-control" placeholder="ادخل الاسم" name="name" required value="{{old('name')}}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>كلمة المرور</label>
                                                <input type="password" class="form-control" placeholder="ادخل كلمة المرور" name="password" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>البريد الإلكتروني</label>
                                                <input type="text" class="form-control" placeholder="ادخل البريد الإلكتروني" name="email" required value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <button type="submit" class="addBtn btn btn-info">إضافة عضو جديد <i class="fa fa-plus"></i></button>
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