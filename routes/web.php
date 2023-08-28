<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControlletr;
use App\Http\Controllers\RegisterControlletr;

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
});
Route::get('/register', [RegisterControlletr::class, 'index']);
Route::post('register/store', [RegisterControlletr::class, 'store'])->name('registerdata');

Route::get('/login', [LoginControlletr::class, 'index']);
Route::post('login/store', [LoginControlletr::class, 'store'])->name('logindata');

Route::get('/home', [LoginControlletr::class, 'home'])->name('home');