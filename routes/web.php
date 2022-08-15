<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/inquiry', [HomeController::class, 'inquiry_now'])->name('inquiry.now');

Route::get('/terms_and_conditions', [HomeController::class, 'terms_and_conditions'])->name('terms_and_conditions');

Route::get('/email', function() {
    // return view('emails.inquiry');
    return view('emails.thanks');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'post_login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware'=>'auth'], function() {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/inquiries', [DashboardController::class, 'inquiries'])->name('inquiries');
        Route::get('/inquiries/list', [DashboardController::class, 'inquiries_list'])->name('inquiries.list');
    });    
});