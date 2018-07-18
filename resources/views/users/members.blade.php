@extends('layouts.app')
@section('content')
    <div class="dash-boby mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 add-new-user">
                    <div class="card main-card">
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">الأعصاء</li>
                                <li class="breadcrumb-item"><a href="#">لوحة التحكم</a></li>

                            </ol>
                        </div>
                        <br>
                        <div class="content">
                            <div class="col  ml-auto">
                                <table class="table table-striped users-table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>صلاحية العضو</th>
                                        <th>اسم العضو</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--Get All Users--}}
                                    <?php
                                    $users =  App\User::all();
                                    ?>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    @endforeach
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