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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('testindex');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('guard', function () {
    return view('guard');
})->name('guard');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
