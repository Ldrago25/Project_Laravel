<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Autorizacion;
use Illuminate\Http\Request;
session_start();
class AutorizacionController extends Controller
{
   public function create(){
       $autorizacion=new Autorizacion();
       $autorizacion->user_id=$_SESSION["user"]->id;
       $autorizacion->package_id_associated=$_SESSION["user"]->package_id;
       $autorizacion->name=$_SESSION["user"]->name;
       $autorizacion->email=$_SESSION["user"]->email;
       $autorizacion->save();
       $_SESSION["auto"]='finish';
       return redirect()->route('user.suscriptor');
   }
}
