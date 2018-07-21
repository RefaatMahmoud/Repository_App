<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Users
Route::get('/login' , 'loginController@index');
Route::post('/login' , 'loginController@index');
Route::get('/register' , 'RegisterController@index');
Route::post('/register' , 'RegisterController@index');
Route::get('/logout' , 'LoginController@logoutFunc');
//Dashboard
Route::get('/dashboard' , 'DashboardController@index');
Route::get('members' , 'DashboardController@members');
Route::get('/aboutUs' , 'DashboardController@aboutUs');
//categories
Route::get('/categories' , 'CategoriesController@Categories');
Route::post('/categories' , 'CategoriesController@Categories');
Route::get('/add_category' , 'CategoriesController@addCat');
Route::post('/updatePrice/{id}' , 'CategoriesController@updatePrice');
Route::post('/addQuantity/{id}' , 'CategoriesController@addQuantity');
//Bills
Route::get('/addBill' , 'BillsController@addBill');
Route::post('/addBill' , 'BillsController@addBill');
