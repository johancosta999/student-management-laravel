<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'create_student']) ->name('student.create');

Route::get('/about', [AdminController::class,'about']) ->name('admin.about');

Route::post('/save', [StudentController::class,'store_student']) ->name('student.store_student');