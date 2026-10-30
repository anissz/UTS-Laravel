<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCalendarController;
use App\Http\Controllers\AdminFormsController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminUiController;

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('About');
Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('Testimoni');
Route::get('/admin-maincontent', [AdminController::class, 'index'])->name('MainContent');
Route::get('/admin-calendar', [AdminCalendarController::class, 'index'])->name('Calendar');
Route::get('/admin-forms', [AdminFormsController::class, 'index'])->name('Forms');
Route::get('/admin-pages', [AdminPagesController::class, 'index'])->name('Pages');
Route::get('/admin-table', [AdminTableController::class, 'index'])->name('Table');
Route::get('/admin-ui', [AdminUiController::class, 'index'])->name('Ui');