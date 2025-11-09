<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Popular Page (Challenge Feature)
Route::get('/popular', [HomeController::class, 'popular'])->name('popular');

// Category Page
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// Course Detail Page
Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.show');

// Writers Pages
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');

// About Us Page
Route::get('/about', [AboutController::class, 'index'])->name('about');
