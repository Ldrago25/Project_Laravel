<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route for page initial
Route::get('/', HomeController::class)->name('/home');

//Route for user login
Route::get('userLogin', [UserController::class,'login'])->name('/userLogin');

//Route for user create
Route::get('userCreate', [UserController::class,'create'])->name('/userCreate');

//Route for validate Login
Route::post('userValidate', [UserController::class,'userValidate'])->name("user.validate");

//Route for create form user
Route::post('userCreateForm',[UserController::class,'createForm'])->name("user.form");