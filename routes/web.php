<?php

use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Route::resource('documento', DocumentoController::class)->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [DocumentoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DocumentoController::class, 'index'])->name('home');
});


