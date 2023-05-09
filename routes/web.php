<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']); // untuk memanggil class index harus menggunakan array tanda [] didalam home sampai index

// auth
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'authenticated']);
Route::get('/logout',[AuthController::class, 'logout']);

//dashboard
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('testimonials', TestimonialController::class)->middleware('auth');