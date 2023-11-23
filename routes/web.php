<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\ExamController;
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

Route::get('/',[DriverController::class, 'index'] );
Route::get('/driver',[DriverController::class,'driver'] );

Route::get('/newexam/{driverId}', [DriverController::class, 'newExam'])->name('newexam');
Route::post('exams', [ExamController::class, 'store'] );
