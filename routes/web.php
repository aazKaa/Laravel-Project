<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::resource('/admin/students', StudentController::class);
Route::resource('/admin/classroom', ClassroomController::class);
