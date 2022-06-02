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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/pizza', function () {
    return view('pizza');
})->name('pizza');

Route::get('/command', function () {
    return view('cmd details');
})->name('cmd details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
