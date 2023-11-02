<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/simpan', function () {
    return view('simpan');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/process', [AuthController::class, 'registerprocess']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/process', [AuthController::class, 'loginprocess']);
Route::get('/home', [AuthController::class, 'homepage']);

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/loginpage', function () {
    return view('loginpage');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

Route::get('/letsread', function () {
    return view('letsread');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/admin', function () {
    return view('admin');
});

