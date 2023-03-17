<?php

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

Route::get('/', function () { return view('welcome');});
Route::get('/about',[\App\Http\Controllers\pages_controller::class,'show_about_us']);
Route::get('/dashboard',[\App\Http\Controllers\pages_controller::class,'show_dashboard']);


Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function () {
    
Route::get('/register', [\App\Http\Controllers\LoginController::class, 'create_user'])->name('register');
Route::post('/register', [\App\Http\Controllers\LoginController::class, 'store_user'])->name("store.register");


});

Route::get('/admin_page', [\App\Http\Controllers\LoginController::class, 'admin_page']);
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store_login'])->name("store.login");
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
