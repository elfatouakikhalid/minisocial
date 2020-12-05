<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/Dashboard',[DashboardController::class,'index'])
    ->name('dashboard')
    // ->middleware('auth')
    ;

Route::get('/Register',[RegisterController::class,'index'])->name('register');
Route::post('/Register',[RegisterController::class,'store']);

Route::post('/Logout',[LogoutController::class,'store'])->name('logout');

Route::get('/Login',[LoginController::class,'index'])->name('login');
Route::post('/Login',[LoginController::class,'store']);

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');
Route::get('/', function () {
    return view('Home');
})->name('home');
