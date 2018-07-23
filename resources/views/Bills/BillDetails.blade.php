@extends('layouts.app')
@section('content')
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
        </div>
    </div>
@endsection