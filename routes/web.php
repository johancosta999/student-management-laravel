<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class,'dashboard']) ->name('admin.dashboard');
Route::get('/about', [AdminController::class,'about']) ->name('admin.about');