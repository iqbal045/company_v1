<?php

use App\Http\Controllers\admin\DashboardController;
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

//Website Frontend Route
//home
Route::get('/', function () {
    return view('frontend.home.index');
});
//blog
Route::get('/blog', function () {
    return view('frontend.blog.index');
});
//blog-detail
Route::get('/blog-detail', function () {
    return view('frontend.blog.detail');
});
//portfolio-detail
Route::get('/portfolio-detail', function () {
    return view('frontend.portfolio.detail');
});
//service-detail
Route::get('/service-detail', function () {
    return view('frontend.service.detail');
});


// Admin Route
Auth::routes();

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
