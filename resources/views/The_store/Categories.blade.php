@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 add-new-user">
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
                                        <th>إضافة</th>
                                        <th>الإجمالي</th>
                                        <th>السعر</th>
                                        <th>الوحدة</th>
                                        <th>كمية</th>
                                        <th>إسم الصنف</th>
                                        <th>كود الصنف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="#" class="btn btn-info">إضافة كمية جديدة</a></td>
                                        <td>800</td>
                                        <td>4</td>
                                        <td>عدد</td>
                                        <td>200</td>
                                        <td>لمبات فينوس</td>
                                        <td scope='row'>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
@endsection