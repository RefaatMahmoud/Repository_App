<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Categories(Request $request){
        if($request->isMethod('post')) {
            return $request->all();
        }
        else{
            return view('The_store.Categories');
        }
    }
    public function addCat(){
        return view('The_store.addCat');
    }
}
