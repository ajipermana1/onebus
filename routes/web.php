<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| i'll do
|
*/

Route::get('/', function () {
    return view('first.first');
});
Route::get('/jadwal', function () {
    return view('first.jadwal');
});
Route::get('/informasi', function () {

    return view('first.info');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);





Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'create']);
Route::get('/wellcome', [FrontendController::class, 'index']);

Route::get('/second', function () {
    return view('second.tsdash', []);
})->middleware('auth');


Route::get('/info', function () {
    return view('second.info.index', []);
});

Route::get('/jdwl', [JadwalController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);