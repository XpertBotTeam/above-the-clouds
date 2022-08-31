<?php

use App\Services\CovidController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\hotelController;

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
Route::get('/hotels',[hotelController::class,'index']);
Auth::routes();
Route::get('/covidstatus',[CovidController::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Auth::routes();
 Route::group(['middleware' => ['auth','isAdmin']], function () {

   Route::get('/dashboard', function () {
      return view('admin');
   });

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tours', function () {
    return view('web/tours');
});
Route::get('/covidstatus', function () {
    return view('web/covidstatus');
});
Route::get('/airlines', function () {
    return view('web/airlines');
});
