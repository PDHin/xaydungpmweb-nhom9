<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\LoginFBController;
use App\Http\Controllers\hienThiPhimController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LichChieuController;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\PhongChieuController;


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


//logout
Route::get('logout-home', [LoginGoogleController::class, 'logout_home']);
//loginGG
Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);
//login facebook
Route::get('auth/facebook', [LoginFBController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [LoginFBController::class, 'handleFacebookCallback']);
//hien thi phim

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/', [App\Http\Controllers\indexController::class, 'home'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/details/{maphim}', [App\Http\Controllers\detailsMovieController::class, 'show'])->name('details');
Route::resource('Phim', PhimController::class);
Route::resource('LichChieu', LichChieuController::class);
Route::resource('PhongChieu', PhongChieuController::class);


