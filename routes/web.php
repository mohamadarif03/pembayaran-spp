<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

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
    return view('welcome');
});
Route::get('/dasboard', function () {
    return view('dashboard.index');
});

Route::get('classrooms', [ClassroomController::class, 'index'])->name('classroom');
Route::get('classrooms/create', [ClassroomController::class, 'create'])->name('classroom.create');
Route::post('classrooms', [ClassroomController::class, 'store'])->name('classroom.store');
Route::get('classrooms/{classroom}', [ClassroomController::class, 'edit'])->name('classroom.edit');
Route::put('classrooms/{classroom}', [ClassroomController::class, 'update'])->name('classroom.update');
Route::delete('classrooms/{classroom}', [ClassroomController::class, 'destroy'])->name('classroom.destroy');


Route::get('student', [StudentController::class, 'index'])->name('student');
