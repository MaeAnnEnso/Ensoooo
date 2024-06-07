<?php

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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([''], function(){
Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add_student', function(){
        return view('add_student');
    })->name('add_student');

    Route::post('/save/student', [\App\Http\Controllers\StudentController::class, 'store'])->name('save-student');

    Route::get('/list', [\App\Http\Controllers\StudentController::class, 'studentlist'])->name('list');
});

