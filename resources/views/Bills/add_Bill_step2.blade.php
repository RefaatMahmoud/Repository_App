@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"> الخطوة الثانية</li>
                                <li class="breadcrumb-item"><a href="#">عمل فاتوره جديده</a></li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <div class="row">
                                    <h5 class="col-sm-12 mb-3">بيانات العميل</h5>
                                    <p class="col-sm-12 mb-3">اسم العميل / {{$clientName}} </p>
                                    <p class="col-sm-12 mb-3">العنوان / {{$address}}</p>
                                    <p class="col-sm-12 mb-3">التاريخ / {{$date}}</p>
                                </div>
                                <form id="form" class="inputUserData" method="post" action="/add_Bill_step2">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <h5 class="mb-3"> إدخال بيانات الصنف </h5>
                                        <div class="form-group row">
                                            <input type="hidden" value="{{$clientId}}" name="clientId">
                                            <div class="col-sm-4">
                                                 <input type="text" class="form-control"placeholder="" name="requestedQuantity" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label">الكمية المطلوبة</label>
                                            <div class="col-sm-5">
                                            <select name="categoryId" id="" class="form-control">
                                                <?php
                                                $catsInfo = DB::table('categories')->get();
                                                ?>
                                                    @foreach($catsInfo as $info)
                                                        <option value="{{$info->id}}">{{$info->name}}</option>
                                                    @endforeach
                                            </select>
                                            </div>
                                            <label class="col-sm-1 col-form-label">صنف</label>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn  btn-info "> الخطوة الثالثة <i class="fa fa-step-backward"></i></button>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
