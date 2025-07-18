<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('users/admins', [UserController::class, 'admins'])->name('users.admin');
Route::get('users/teachers', [TeacherController::class, 'index'])->name('users.teacher');
Route::get('users/students', [StudentsController::class, 'index'])->name('users.student');
