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
    return view('welcome');
});

Route::get('/vat', [\App\Http\Controllers\VatController::class, 'index'])->name('vat.root');
Route::post('/verify', [\App\Http\Controllers\VatController::class, 'store'])->name('vat.post');

