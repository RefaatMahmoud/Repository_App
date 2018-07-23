@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"> سجل الفواتير </li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>
                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <table class="table table-striped objects-table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>تفاصيل الفاتورة</th>
                                        <th>تاريخ الفاتورة</th>
                                        <th>العنوان</th>
                                        <th>إسم العميل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clientsInfo as $clientInfo)
                                    <tr>
                                        <td><a href="BillDetails/{{$clientInfo->id}}">تفاصيل الفاتوره</a></td>
                                        <td>{{$clientInfo->date}}</td>
                                        <td>{{$clientInfo->address}}</td>
                                        <td>{{$clientInfo->clientName}}</td>
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