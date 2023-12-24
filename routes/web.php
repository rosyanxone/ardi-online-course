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
    Route::get('/kursus/tambah', 'create')->name('courseCreate');
    Route::post('/kursus/tambah/baru', 'store')->name('courseStore');
    Route::get('/kursus/edit/{slug}', 'edit')->name('courseEdit');
    Route::post('/kursus/edit/{slug}/ubah', 'update')->name('courseUpdate');
    Route::get('/kursus/destroy/{slug}', 'destroy')->name('courseDestroy');
    Route::get('/kursus/{slug}', 'materials')->name('materials');
});

Route::controller(MaterialController::class)->group(function () {
    Route::get('/materi','index')->name('material');
    Route::get('/materi/tambah', 'create')->name('materialCreate');
});
