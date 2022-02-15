<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Task1Controller;
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

Route::get('/', [PagesController::class, 'index']);


Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/student', [StudentController::class, 'index'])->name('sindex');
Route::get('/student/show/{name}/{id}/{cg}', [StudentController::class, 'show'])->name('sshow');
Route::get('/student/get/{id}', [StudentController::class, 'get'])->name('get');
Route::get('/teacher/get/{id}', [TeacherController::class, 'get'])->name('t.get');
Route::get('/student/create', [StudentController::class, 'create'])->name('create');
Route::get('/student/reg', [StudentController::class, 'register'])->name('reg');
Route::get('task1/', [Task1Controller::class, 'index'])->name('task1.index');
Route::get('task1/admin', [Task1Controller::class, 'admin'])->name('task1.admin');
Route::get('task1/student', [Task1Controller::class, 'student'])->name('task1.student');
Route::post('/login', [PagesController::class, 'loginsubmit'])->name('login.submit');
Route::get('/reg', [PagesController::class, 'reg'])->name('reg');
Route::post('/reg', [PagesController::class, 'regsubmit'])->name('reg.submit');

