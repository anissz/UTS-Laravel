<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/admin-maincontent', [AdminController::class, 'index'])->name('MainContent');
