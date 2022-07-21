<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
Route::get("/about",[WebController::class,"aboutUs"]);
//Student
Route::get("/student/list",[\App\Http\Controllers\StudentsController::class,"all"]);
Route::get("/student/create",[\App\Http\Controllers\StudentsController::class,"form"]);
Route::post("/student/create",[\App\Http\Controllers\StudentsController::class,"create"]);
//Class
Route::get("/class/list",[\App\Http\Controllers\ClassesController::class,"all"]);
Route::get("/class/create",[\App\Http\Controllers\ClassesController::class,"form"]);
Route::post("/class/create",[\App\Http\Controllers\ClassesController::class,"create"]);
//Subject
Route::get("/subject/list",[\App\Http\Controllers\SubjectsController::class,"all"]);
Route::get("/subject/create",[\App\Http\Controllers\SubjectsController::class,"form"]);
Route::post("/subject/create",[\App\Http\Controllers\SubjectsController::class,"create"]);
//Score
Route::get("/score/list",[\App\Http\Controllers\ScoresController::class,"all"]);
Route::get("/score/create",[\App\Http\Controllers\ScoresController::class,"form"]);
Route::post("/score/create",[\App\Http\Controllers\ScoresController::class,"create"]);
