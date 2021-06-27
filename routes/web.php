<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
//search
Route::post('search','App\Http\Controllers\pageController@getSearch');
//trangchu
Route::get('trangchu','App\Http\Controllers\pageController@getIndex');
Route::get('trangchu','App\Http\Controllers\pageController@getMenu');
Route::get('type/{id}','App\Http\Controllers\pageController@getType');
Route::get('object/{id}','App\Http\Controllers\pageController@getObject');
Route::get('detail/{id}','App\Http\Controllers\pageController@getDetail');
//Login Admin
Route::get('admin','App\Http\Controllers\adminController@indexAdmin');
Route::get('dangnhap','App\Http\Controllers\loginController@getlogin');
Route::post('dangnhap','App\Http\Controllers\loginController@postlogin');
Route::get('logout','App\Http\Controllers\loginController@getlogout1');
//Admin
Route::resource('Category',App\Http\Controllers\CategoryController::class);
Route::resource('Type',App\Http\Controllers\TypeController::class);
Route::resource('Object',App\Http\Controllers\ObjectController::class);
