<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('task1/', [Task1Controller::class, 'index'])->name('task1.index');
Route::get('task1/admin', [Task1Controller::class, 'admin'])->name('task1.admin');
Route::get('task1/student', [Task1Controller::class, 'student'])->name('task1.student');

