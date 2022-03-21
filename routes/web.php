<?php

use App\Http\Controllers\WelcomeAdminController;
use App\Http\Controllers\WelcomeStudentController;
use App\Http\Controllers\WelcomeTeacherController;
use App\Models\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class,'index']);

// route for administrator
Route::get('/welcome_admin', [WelcomeAdminController::class,'welcome_admin'])->middleware(['auth'])->name('welcome_admin');


// route for teacher
Route::get('/welcome_teacher', [WelcomeTeacherController::class,'welcome_teacher'])->middleware(['auth'])->name('welcome_teacher');


// route for student
Route::get('/welcome_student', [WelcomeStudentController::class,'welcome_student'])->middleware(['auth'])->name('welcome_student');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
