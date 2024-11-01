<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('/admins/detail/{id}', [AdminController::class, 'detail'])->name('detail');

Route::get('/admins/essence', [AdminController::class, 'essence'])->name('essence');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('sendMessage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
