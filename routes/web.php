<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/kursus', function () {
    return view('course.index');
})->name('course');

Route::get('/materi', function () {
    return view('material.index');
})->name('material');

Route::get('/materi/tambah', function () {
    return view('material.form');
})->name('materialCreate');
