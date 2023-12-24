<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
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

Route::controller(CourseController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/kursus', 'index')->name('course');
    Route::get('/kursus/{slug}', 'materials')->name('materials');
});

Route::get('/materi', [MaterialController::class, 'index'])->name('material');

Route::get('/materi/tambah', function () {
    return view('material.form');
})->name('materialCreate');
