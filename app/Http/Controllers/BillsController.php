<?php

namespace App\Http\Controllers;

use App\Bills;
use App\Client;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function addClientInfo(Request $request){
        if($request->isMethod('post'))
        {
            //create object
            $clientObj = new Client();
            //requests
            $clientObj->clientName =$request->clientName;
            $clientObj->address = $request->address;
            $clientObj->date = $request->date;
            //validation
            $this->validate($request , [
                "clientName" => "string",
                "address" => "string",
                "date" => "string",
            ],[
                "clientName.string" => "لابد ان يكون اسم العميل بالحروف",
                "address.string" => "لابد ان يكون اسم العنوان بالحروف",
                "date.string" => "لابد ان يكون اسم التاريخ بالحروف"
            ]);
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
            return view('Bills.addBill');
        }
    }
    public function finishBill(){
        return view('Bills.finishBill');
    }
    public function add_Bill_step2(Request $request){
       if($request->isMethod('post'))
       {
           //create object
           $bill_Info = new Bills();
           //requests
           $bill_Info->clientId =$request->clientId;
           $bill_Info->quantity = $request->quantity;
           $bill_Info->categoryId = $request->categoryId;
           //save
           $bill_Info->save();
           //redirect
           return view('Bills.add_Bill_step3')->with([
               'clientId' => $bill_Info->clientId,
               'categoryId' => $bill_Info->categoryId,
               'requestedQuantity' => $request->quantity
           ]);
       }
       else
       {

       }
    }
}
