<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('users/admins', [UserController::class, 'admins'])->name('users.admin');
Route::get('users/teachers', [UserController::class, 'teachers'])->name('users.teacher');
Route::get('users/students', [UserController::class, 'students'])->name('users.student');
