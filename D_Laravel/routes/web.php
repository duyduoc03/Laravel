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
Route::get('/list-category', function () {
    return view('category/list-category');
});
Route::get('/add-category', function () {
    return view('category/add-category');
});
Route::get('/edit-category', function () {
    return view('category/edit-category');
});
Route::get('/list-product', function () {
    return view('product/list-product');
});
Route::get('/add-product', function () {
    return view('product/add-product');
});
Route::get('/edit-product', function () {
    return view('product/edit-product');
});
