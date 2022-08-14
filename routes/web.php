<?php

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

Route::get('/email', function() {
    // return view('emails.inquiry');
    return view('emails.thanks');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', [DashboardController::class, 'index']);
    
    Route::get('/inquiries', [DashboardController::class, 'inquiries']);
    Route::get('/inquiries/list', [DashboardController::class, 'inquiries_list'])->name('inquiries.list');
});