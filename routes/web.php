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
Route::get('/',[\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::post('login',[\App\Http\Controllers\LoginController::class,'login'])->name('Logincheck');

Route::middleware([\App\Http\Middleware\Authenticate::class])->group(function () {
    Route::get('index',[\App\Http\Controllers\shenmu::class,'index']);
    Route::get('show',[\App\Http\Controllers\shenmu::class,'show']);
    Route::post('add',[\App\Http\Controllers\shenmu::class,'add']);
    Route::get('del',[\App\Http\Controllers\shenmu::class,'del']);
    Route::get('lists',[\App\Http\Controllers\shenmu::class,'lists']);
});






