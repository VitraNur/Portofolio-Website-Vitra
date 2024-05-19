<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

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
    return view('home');
});



Route::get('login', [SesiController::class,'index'])->name('login');
Route::post('proses_login', [SesiController::class,'proses_login'])->name('proses_login');
Route::get('logout', [SesiController::class,'logout'])->name('logout');

Route::get('/back/portofolio',[TamuController::class,'index']);
Route::get('/back/portofolio/delete/{id}',[TamuController::class,'destroy']);
Route::match(['get','post'],'/back/portofolio/update/{id}',[TamuController::class,'update']);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', TamuController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', TamuController::class);
    });
});


Route::match(['get','post'],'/',[TamuController::class,'store']);
Route::get('/welcome', function () {
    return view('welcome');
});