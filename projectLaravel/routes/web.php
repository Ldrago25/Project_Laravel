<?php

use App\Http\Controllers\AutorizacionController;
use App\Http\Controllers\CableController;
use App\Http\Controllers\CanaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternetController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TelefoniaController;
use App\Http\Controllers\UserController;
use App\Models\Autorizacion;
use App\Models\Canale;

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

Route::get('userPackages',[UserController::class,'packages'])->name("user.packages");

Route::get('userBuy/{id}',[UserController::class,'buyPackage'])->name("user.buy");

Route::get('factura',[UserController::class,'factura'])->name("user.factura");

Route::get('userAdmin',[UserController::class,'admin'])->name("user.admin");

Route::get('userSuscriptor',[UserController::class,'suscriptor'])->name("user.suscriptor");

Route::get('solicitudes',[UserController::class,'autorizacion'])->name("autorizacion.show");

Route::get('/solicitudesDestroy{id}',[UserController::class,'destroyAut'])->name("autorizacion.destroy");

Route::get('/solicitudesUpdate{id}{idUser}',[UserController::class,'updateAut'])->name("autorizacion.Update");

Route::get('userClose',[UserController::class,'close'])->name("user.close");

//Route for show users if he user is admin
Route::get('usersEdit',[UserController::class,'show'])->name("user.show");

Route::get('userEdit/{id}',[UserController::class,'updateUser'])->name("user.edit");

Route::get('user/{id}', [UserController::class,'destroy'])->name("user.destroy");

Route::post('userDataUpdate', [UserController::class,'dataUpdate'])->name("user.data");
//-----------------------------------------------------------------------------------------------------//

//rutas para la tabla packages
Route::get('package', [PackageController::class,'show'])->name('package.show');

Route::post('packageForm', [PackageController::class,'create'])->name('package.form');

//rutas para los servicios de internet
Route::get('internet', [InternetController::class,'showInternet'])->name("internet.show");

Route::post('internetForm', [InternetController::class,'create'])->name("internet.form");

//rutas para los servicios de cable
Route::get('cable', [CableController::class,'showCable'])->name("cable.show");

Route::post('cableForm', [CableController::class,'create'])->name("cable.form");

//rutas para los servicios de telefonia
Route::get('telefonia',[TelefoniaController::class,'showTelefonia'])->name("telefonia.show");

Route::post('telefonia',[TelefoniaController::class,'create'])->name("telefonia.form");

//para cambiar plan 
Route::get('autorizacionPlan',[AutorizacionController::class,'create'])->name("user.autorizacion");

//rutas para programaciones
Route::get('allCanals/{valor}',[CanaleController::class,'all'])->name("canals.all");

Route::post('search',[CanaleController::class,'searchs'])->name("search.information");