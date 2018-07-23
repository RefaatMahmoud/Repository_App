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
                                    <?php
                                    $clientInfos = DB::table('clients')->where('id','=',$clientId)->get();
                                    ?>
                                    @foreach($clientInfos as $clientInfo)
                                        <h5 class="pb-3">اسم العميل / {{$clientInfo->clientName}}</h5>
                                        <h5 class="pb-3"> العنوان / {{$clientInfo->address}}</h5>
                                        <h5 class="pb-3"> تاريخ الفاتوره / {{$clientInfo->date}}</h5>
                                    @endforeach
                                </div>
                            </div>
                            <table class="table table-striped users-table">
                                <thead class="thead-inverse">
                                <tr>
                                    <th>الإجمالي</th>
                                    <th>الكمية المطلوبة</th>
                                    <th>السعر</th>
                                    <th>إسم الصنف</th>
                                    <th>كود الصنف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $totalPriceItems = 0;
                                //Bill Informations for current customer
                                $billsInfo = DB::table('bills')->where('clientId','=' , $clientId)->get();
                                //get category info for current single bill info
                                foreach ($billsInfo as $billInfo)
                                {
                                $catId = $billInfo->categoryId;
                                $requestedQuantity = $billInfo->requestedQuantity;
                                $totalPriceItem = $billInfo->total;
                                $totalPriceItems += $totalPriceItem;
                                $catsInfo = DB::table('categories')->where('id','=' , $catId)->get();;
                                foreach ($catsInfo as $catInfo)
                                {?>
                                <tr>
                                    <td>{{$totalPriceItem}}</td>
                                    <td>{{$requestedQuantity}}</td>
                                    <td>{{$catInfo->price}}</td>
                                    <td>{{$catInfo->name}}</td>
                                    <td>{{$catInfo->id}}</td>
                                </tr>
                                <?php
                                }
                                }
                                ?>
                                </tbody>
                            </table>
                            <h5 class="alert alert-success pb-3"> السعر الإجمالى = {{$totalPriceItems}} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="/dashboard">الرجوع الى لوحة التحكم</a>
        <a id="printBill" href="/finsihBill" class="btn btn-info">طباعة الفاتورة</a>
    </div>
</div>
<!-- Scripts -->
<script src="{{asset('js/printBill.js')}}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>