<?php

use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('shifts', 'ShiftController');
Route::resource('semesters', 'SemesterController');
Route::resource('groups', 'GroupController');
Route::resource('students', 'StudentController');
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::resource('inscriptions', 'InscriptionController');
