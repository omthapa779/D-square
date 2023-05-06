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
Route::get('/', function () {return view('welcome');});

Route::group(['middleware' => 'auth'], function () {    
Route::get('/register', [\App\Http\Controllers\LoginController::class, 'create_user'])->name('register');
Route::post('/register', [\App\Http\Controllers\LoginController::class, 'store_user'])->name("store.register");
Route::get('/admin_page', [\App\Http\Controllers\LoginController::class, 'admin_page']);
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/announce', [\App\Http\Controllers\LoginController::class, 'Announce'])->name('Announce');
Route::post('/announce', [\App\Http\Controllers\LoginController::class, 'make_announcement'])->name("store.announce");
Route::get('/jobs_upload', [\App\Http\Controllers\LoginController::class, 'jobs_upload'])->name('jobs_upload');
Route::post('/jobs_upload', [\App\Http\Controllers\LoginController::class, 'store_job'])->name("store.job");
Route::get('/check', [\App\Http\Controllers\LoginController::class, 'check'])->name('check');

});

Route::get('/apply', [\App\Http\Controllers\LoginController::class, 'apply'])->name('apply');
Route::post('/apply', [\App\Http\Controllers\LoginController::class, 'store_apply'])->name("store.apply");
Route::get('/jobs', [\App\Http\Controllers\LoginController::class, 'jobs'])->name('jobs');
Route::get('/announcement', [\App\Http\Controllers\LoginController::class, 'Announcement'])->name('Announcement');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store_login'])->name("store.login");

