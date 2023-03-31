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
    return view('index');
})->name('index');
Auth::routes();


Route::post('/registers', [App\Http\Controllers\HomeController::class, 'registers'])->name('registers');
Route::post('/logins', [App\Http\Controllers\HomeController::class, 'logins'])->name('logins');
Route::get('ar/', function () {
    return view('index-ar');
})->name('index-ar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
