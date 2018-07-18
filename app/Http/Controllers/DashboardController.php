<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function members(){
        return view('users.members');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
}
