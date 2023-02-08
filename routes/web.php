<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrepodController;
use App\Http\Controllers\StudController;

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

Route::get('/', function () {
    return view('HOME');
});
Route::get('/about', function () { 
    return view('about');
});
Route::get('/contact', function () { 
    return view('contact');
});
Route::get('/u20', function () { 
    return view('u20');
});
Route::get('HOME', function () {
    return view('HOME');
});
Route::get('prepodTable', [PrepodController::class, 'index']);

Route::get('StudTable', [StudController::class, 'index']);
