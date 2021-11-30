<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {return view('welcome');});

// create Student
Route::get('createStudent',[UserController::class,'create']);
Route::post('store',[UserController::class,'store']);
// display Student
Route::get('students',[UserController::class,'index']);
//Delete Student
Route::get('deleteStudent/{id}',[UserController::class,'destroy']);
// Edit Student
Route::get('editStudent/{id}',[UserController::class,'edit']);
Route::post('updateStudent/{id}',[UserController::class,'update']);


