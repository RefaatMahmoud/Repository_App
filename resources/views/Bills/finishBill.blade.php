<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>تطبيق المخزن</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_allPages.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
<!-- start dash body section -->
<div class="dash-boby mt-5">
    <div class="container">
        <div class="row">
            <!-- start print bill  -->
            <div class="col printBill">
                <div class="card main-card">
                    <div class="card-header">
                        <h2>فاتورة من : الحرايري</h2>
                    </div>
                    <br>
                    <div class="content">
                        <div class="col  ml-auto">
                            <div class="printBillHeader">
                                <div class="firstRow">
                                    <h5 class="pb-3">/ اسم العميل </h5>
                                    <h5 class="pb-3">/ العنوان </h5>
                                    <h5 class="pb-3">/ تاريخ الفاتوره </h5>
                                    <h5 class="pb-3">/ السعر الإجمالى </h5>
                                </div>
                            </div>
                            <table class="table table-striped users-table">
                                <thead class="thead-inverse">
                                <tr>
                                    <th>السعر الإجمالي</th>
                                    <th>سعر الوحدة</th>
                                    <th>نوع الوحدة</th>
                                    <th>عدد الوحدة</th>
                                    <th>إسم الصنف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>30</td>
                                    <td>3</td>
                                    <td>سيخ</td>
                                    <td>10</td>
                                    <td>ماسورة</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>3</td>
                                    <td>سيخ</td>
                                    <td>10</td>
                                    <td>ماسورة</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="/dashboard">الرجوع الى لوحة التحكم</a>
        <button class="btn btn-info">طباعة الفاتورة</button>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>