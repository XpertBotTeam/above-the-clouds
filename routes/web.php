<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
    return view('home');
});

Route::get('/register',[UserController::class,'create']);
Route::get('/admin',[AdminController::class,'index']);
Route::post('/users',[UserController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/hotels', function () {
    return view('web/hotels');
});
Route::get('/tours', function () {
    return view('web/tours');
});
Route::get('/route', function () {
    return view('web/route');
});
Route::get('/airlines', function () {
    return view('web/airlines');
});
