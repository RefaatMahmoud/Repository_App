@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    @include('flashMessages.messages')
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
                                    <?php
                                    $clientInfo = DB::table('clients')->where('id','=',$clientId)->get();
                                    ?>
                                    @foreach($clientInfo as $info)
                                    <p class="col-sm-12 mb-3">اسم العميل / {{$info->clientName}} </p>
                                    <p class="col-sm-12 mb-3">العنوان / {{$info->address}}</p>
                                    <p class="col-sm-12 mb-3">التاريخ / {{$info->date}}</p>
                                    @endforeach
                                    <table class="table table-striped objects-table">
                                        <thead>
                                        <tr>
                                            <th>الإجمالي</th>
                                            <th>كمية</th>
                                            <th>السعر</th>
                                            <th>إسم الصنف</th>
                                            <th>كود الصنف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //Bill Info for current customer
                                            $billInfo = DB::table('bills')->where('clientId','=' , $clientId)->get();
                                            //get category info for current single bill info
                                            foreach ($billInfo as $singleInfo)
                                                {
                                                    $catId = $singleInfo->categoryId;
                                                    $catInfo = DB::table('categories')->where('id','=' , $catId)->get();;
                                                   foreach ($catInfo as $singlecatInfo)
                                                       {?>
                                                        <tr>
                                                            <td>{{$requestedQuantity * $singlecatInfo->price}}</td>
                                                            <td>{{$requestedQuantity}}</td>
                                                            <td>{{$singlecatInfo->price}}</td>
                                                            <td>{{$singlecatInfo->name}}</td>
                                                            <td>{{$singlecatInfo->id}}</td>
                                                        </tr>
                                            <?php

                                                       }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <form id="form" class="inputUserData" method="post" action="/add_Bill_step2">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <h5 class="mb-3"> إذا كنت تريد إضافة اصناف اخرى الى الفاتوره ادخل البيانات </h5>
                                        <div class="form-group row">
                                            <input type="hidden" value="{{$clientId}}" name="clientId">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control"placeholder="" name="quantity">
                                            </div>
                                            <label class="col-sm-2 col-form-label">الكمية المطلوبة</label>
                                            <div class="col-sm-5">
                                                <select name="categoryId" id="" class="form-control">
                                                    <?php
                                                    $catsInfo = DB::table('categories')->get();
                                                    ?>
                                                    @foreach($catsInfo as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-sm-1 col-form-label">صنف</label>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn  btn-info "> إضافة الصنف الى الفاتوره <i class="fa fa-plus"></i></button>
                                    <a class="btn btn-primary" href="">إنهاء الفاتوره</a>
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
