<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function addBill(Request $request){
        if($request->isMethod('post'))
        {
            return $request->all();
        }
        else
        {
            return view('Bills.addBill');
        }
    }
    public function finishBill(){
        return view('Bills.finishBill');
    }
}
