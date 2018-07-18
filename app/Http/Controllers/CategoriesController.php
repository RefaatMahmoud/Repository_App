<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    public function Categories(Request $request){
        if($request->isMethod('post')) {
            $catObj = new Categories();
            //Validate
            $this->validate($request , [
                'name' => 'unique:Categories',
                'price' => 'regex:/^\d*(\.\d{1})?$/',
                'quantity' => 'regex:/^\d*(\.\d{1})?$/'
            ],[
                'name.unique' => 'هذا الصنف موجود بالفعل فى المخزن',
                'price.regex' => 'لابد ان يكون السعر رقم إما ان يكون صحيح او عشرى مثال 10.5',
                'quantity.regex' => 'لابد ان تكون الكمية السعر رقم إما ان يكون صحيح او عشرى مثال 10.5'
            ]);
            //Requests
            $catObj->name = $request->name;
            $catObj->quantity = $request->quantity;
            $catObj->price = $request->price;
            $catObj->type = $request->type;
            //Save
            $catObj->save();
            //Redirect
            return redirect('/dashboard')->with('success','تم إضافة الصنف بنجاح');
        }
        else{
            return view('The_store.Categories');
        }
    }
    public function addCat(){
        return view('The_store.addCat');
    }
}
