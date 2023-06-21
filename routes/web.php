<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
})->name('login');

Route::get('home',[HomeController::class,'show']);

Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);

Route::get('/template', function () {
    return view('template');
});


Route::get('profil',[ProfilController::class,'show']);
Route::get('profil',[ProfilController::class,'profil']);
Route::post('profil/create',[ProfilController::class,'create']);
Route::get('profil/{id}',[ProfilController::class,'edit']);
Route::post('profil/{id}',[ProfilController::class,'update']);

Route::get('portofolio',[PortofolioController::class,'show']);
Route::get('portofolio/add',[PortofolioController::class,'add']);
Route::post('portofolio/create',[PortofolioController::class,'create']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);