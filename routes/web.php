<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'{locale}'],function (){
    Route::get('/', function () {
        return view('welcome');
    })->middleware('setLocale');
});

//Route::get('/{locale}/news',[\App\Http\Controllers\NewsController::class,'index'])->middleware('setLocale');




