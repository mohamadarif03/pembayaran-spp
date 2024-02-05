<?php

use Illuminate\Support\Facades\Route;
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

Route::get('classroom', [ClassroomController::class, 'index']);
Route::get('classroom/create', [ClassroomController::class, 'create']);
Route::post('classroom', [ClassroomController::class, 'store']);
Route::get('classroom/{classroom}/edit', [ClassroomController::class, 'edit']);
Route::post('classroom/{classroom}', [ClassroomController::class, 'update']);
Route::get('classroom/{classroom}/delete', [ClassroomController::class, 'destroy']);
