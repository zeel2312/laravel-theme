<?php

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

// Route::get('/car-home', function () {
//     return view('carHome');
// });

Route::get('/shoes-home', [App\Http\Controllers\HomeController::class, 'shoesHome'])->name('shoesHome');

Route::get('/shoes-about', [App\Http\Controllers\HomeController::class, 'shoesAbout'])->name('shoesAbout');

Route::get('/shoes-blog', [App\Http\Controllers\HomeController::class, 'shoesBlog'])->name('shoesBlog');

Route::get('/shoes-contact', [App\Http\Controllers\HomeController::class, 'shoesContact'])->name('shoesContact');