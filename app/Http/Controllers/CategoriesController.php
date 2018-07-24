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
                'price' => 'regex:/^\d*(\.\d{2})?$/',
                'quantity' => 'regex:/^\d*(\.\d{1})?$/'
            ],[
                'name.unique' => 'هذا الصنف موجود بالفعل فى المخزن',
                'price.regex' => 'لابد ان يكون السعر رقم إما ان يكون صحيح او عشرى مثال 10.50',
                'quantity.regex' => 'لابد ان تكون الكمية رقم إما ان يكون صحيح او عشرى مثال 10.50'
            ]);
            //Requests
            $catObj->name = $request->name;
            $catObj->quantity = $request->quantity;
            $catObj->price = $request->price;
            //Save
            $catObj->save();
            //Redirect
            return redirect('/dashboard')->with('success','تم إضافة الصنف بنجاح');
        }
        else{
            return view('Categories.Categories');
        }
    }

    public function addCat(){
        return view('Categories.addCat');
    }

    public function updatePrice(Request $request , $id){
        $catObj = Categories::find($id);
        //Validation
        $this->validate($request , [
            'price' => 'regex:/^\d*(\.\d{2})?$/'
        ],[
            'price.regex' => 'لابد ان يكون السعر رقم إما ان يكون صحيح او عشرى مثال 10.50'
        ]);
        //Modify Price
        $catObj->price = $request->price;
        $catObj->save();
        //Redirect
        return redirect('/dashboard')->with('success','تم تعديل السعر بنجاح');
    }

    public function addQuantity(Request $request , $id){
        $catObj = Categories::find($id);
        //Validation
        $this->validate($request , [
            'quantity' => 'regex:/^\d*(\.\d{2})?$/'
        ],[
            'quantity.regex' => 'لابد ان تكون الكمية رقم إما ان يكون صحيح او عشرى مثال 10.50'
        ]);
        //Get old and request quantity
        $oldQuantity = $catObj->quantity;
        $requestQuantity = $request->quantity;
        //New Quantity
        $newQuantity = $oldQuantity + $requestQuantity;
        //Save
        $catObj->quantity = $newQuantity;
        $catObj->save();
        //Redirect
        return redirect('/dashboard')->with('success','تم تعديل الكمية بنجاح');
    }
}