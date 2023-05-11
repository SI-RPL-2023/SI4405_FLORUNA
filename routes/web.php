<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
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
    return view('Homepage');
});

Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/posting', [PostinganController::class, 'index']);
Route::post('/posting', [PostinganController::class, 'upload']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/data/user', [AdminController::class, 'data_user']);
Route::get('/data/user/detail/{id}', [AdminController::class, 'detail_user']);

Route::get('/data/comunity', [AdminController::class, 'data_comunity']);
Route::get('/data/comunity/detail/{id}', [AdminController::class, 'detail_comunity']);

Route::get('/data/postingan', [AdminController::class, 'data_postingan']);
Route::get('/data/postingan/detail/{id}', [AdminController::class, 'detail_comunity']);

Route::get('/data/postingan/konfirmasi/{id}', [PostinganController::class, 'konfirmasi']);
Route::get('/data/postingan/delete/{id}', [PostinganController::class, 'delete']);


Route::get('/logout', [LogoutController::class, 'logout']);
