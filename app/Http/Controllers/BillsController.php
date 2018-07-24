<?php

namespace App\Http\Controllers;

use App\Bills;
use App\Categories;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use DB;

class BillsController extends Controller
{
    
    public function index(){
        $clientsInfo = Client::all();
        return view('Bills.Bills')->with('clientsInfo' ,$clientsInfo );
    }

    public function BillDetatils($id){
        $clientId = DB::table('bills')->where('clientId','=',$id)->value('clientId');
        //Get Client Info
        $clientInfo = DB::table('clients')->where('id','=',$id)->get();
        //Get category Info
        $catsInfo = DB::table('bills')->where('clientId' , '=' , $clientId)->get();
        return view('Bills.BillDetails')->with([
            "clientId" => $clientId,
            "clientInfo" => $clientInfo,
            "catsInfo" => $catsInfo
        ]);
    }

    public function add_Bill_step1(Request $request){
        if($request->isMethod('post'))
        {
            //create object
            $clientObj = new Client();
            //requests
            $clientObj->clientName =$request->clientName;
            $clientObj->address = $request->address;
            $clientObj->date = $request->date;
            //save
            $clientObj->save();
            //redirect
            return view('Bills.add_Bill_step2')->with([
                "clientId" => $clientObj->id,
                "clientName" => $clientObj->clientName,
                "address" =>  $clientObj->address,
                "date" =>  $clientObj->date
            ]);
        }
        else
        {
            return view('Bills.add_Bill_step1');
        }
    }

    public function add_Bill_step2(Request $request){
       if($request->isMethod('post'))
       {
           //Create object
           $bill_Info = new Bills();
           //Requests
           $bill_Info->clientId =$request->clientId;
           $bill_Info->requestedQuantity = $request->requestedQuantity;
           $bill_Info->categoryId = $request->categoryId;
           //Total price
           $catPrice = DB::table('categories')->where('id','=',$bill_Info->categoryId)->value('price');
           $bill_Info->total = $catPrice * $request->requestedQuantity;
           $bill_Info->save();
           //Reduce from stock
           $cat = Categories::find($request->categoryId);
           $cat->quantity = $cat->quantity - $request->requestedQuantity;
           //Save
           $cat->save();

           //Redirect
           return view('Bills.add_Bill_step3')->with([
               'clientId' => $bill_Info->clientId,
               'categoryId' => $bill_Info->categoryId,
           ]);
       }
    }

    public function finishBill(){
        //get Last Client Id from Bills
        $clientId = DB::table('bills')->orderby('clientId','Desc')->take(1)->value('clientId');
        //Get Client Info
        $clientInfo = DB::table('clients')->where('id','=',$clientId)->get();
        //Get category Info
        $catsInfo = DB::table('bills')->where('clientId' , '=' , $clientId)->get();
        return view('Bills.finishBill')->with([
            "clientId" => $clientId,
            "clientInfo" => $clientInfo,
            "catsInfo" => $catsInfo
        ]);
    }
}
