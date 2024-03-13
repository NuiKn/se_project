<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('emp', 'App\Http\Controllers\empController@index');
Route::get('db', 'App\Http\Controllers\aController@index');
Route::get('team', 'App\Http\Controllers\teamController@index');



//Route::get('db', 'App\Http\Controllers\aController@index2');
/*
Route::get('db', function () {
    return view('db');
});*/
