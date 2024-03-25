<?php

use App\Http\Controllers\empController;
use App\Http\Controllers\aController;
use App\Http\Controllers\teamController;
use Illuminate\Support\Facades\Route;
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
Route::get('emp', [empController::class,'index']);
Route::get('db', [aController::class,'index']);
Route::get('team', [teamController::class,'index']);
Route::post('insert', [aController::class,'insert']);



//Route::get('db', 'App\Http\Controllers\aController@index2');
/*
Route::get('db', function () {
    return view('db');
});*/
