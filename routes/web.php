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

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => "manage"], function () {

    Route::get("index", "\App\Http\Controllers\MainController@ShowList");
    Route::get("create", "\App\Http\Controllers\MainController@create");
    Route::post("store", "\App\Http\Controllers\MainController@store");
    Route::get("{id}/show", "\App\Http\Controllers\MainController@ShowId");
    Route::get("{id}/edit", "\App\Http\Controllers\MainController@editID");
    Route::patch("{id}/update", "\App\Http\Controllers\MainController@updateId");
    Route::delete("{id}", "\App\Http\Controllers\MainController@deleteId");



});
