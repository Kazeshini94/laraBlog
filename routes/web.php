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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Commented Method only works with one specific parameter ! would be annoying in a big DB with many tables
// second way enables us to use every Parameter from our Model wich gets them directly from the DB tables !!
//Route::get('post/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
