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
                                <li class="breadcrumb-item active"> الأصناف </li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <table class="table table-striped objects-table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>التحكم</th>
                                        <th>الإجمالي</th>
                                        <th>السعر</th>
                                        <th>كمية</th>
                                        <th>إسم الصنف</th>
                                        <th>كود الصنف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $cats = App\Categories::all();
                                    ?>
                                    @foreach($cats as $cat)
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#َQuantityModal"> إضافة كمية جديدة</button>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#PriceModal"> تعديل السعر</button>
                                            <!-- Price Modal -->
                                            <div class="modal fade" id="PriceModal"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">تعديل سعر الصنف</h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/updatePrice/{{$cat->id}}" method="POST">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="price">
                                                                </div>
                                                                <input type="submit" class="btn btn-info btn-block" value="تعديل">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Quantity Modal -->
                                            <!-- Price Modal -->
                                            <div class="modal fade" id="َQuantityModal"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">إضافة كمية جديدة </h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/addQuantity/{{$cat->id}}" method="POST">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="quantity">
                                                                </div>
                                                                <input type="submit" class="btn btn-info btn-block" value="إضافة الكمية">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$cat->price * $cat->quantity}}</td>
                                        <td>{{$cat->price}}</td>
                                        <td>{{$cat->quantity}}</td>
                                        <td>{{$cat->name}}</td>
                                        <td scope='row'>{{$cat->id}}</td>
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
@endsection