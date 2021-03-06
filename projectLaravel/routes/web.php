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
/*
    por convecion se puede generar una ruta globar con Route::resource('user', UserController::class);
    pero para el usuario por ahora no lo necesito
*/
//Route for user login
Route::get('userLogin/{valueLogin}', [UserController::class,'login'])->name('/userLogin');

//Route for user create
Route::get('userCreate/{valueValidate}', [UserController::class,'create'])->name('/userCreate');

//Route for validate Login
Route::post('userValidate', [UserController::class,'userValidate'])->name("user.validate");

//Route for create form user
Route::post('userCreateForm',[UserController::class,'createForm'])->name("user.form");

//Route for show users if he user is admin
Route::get('user/{id}',[UserController::class,'show'])->name("user.show");

Route::put('user/{id}',[UserController::class,'update'])->name("user.update");

Route::delete('user/{id}', [UserController::class,'destroy'])->name("user.destroy");