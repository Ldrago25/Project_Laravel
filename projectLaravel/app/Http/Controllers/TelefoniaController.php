<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Telefonia;
use Illuminate\Http\Request;
session_start();
class TelefoniaController extends Controller
{
    public function showTelefonia(){
        return view("services.telefonia");
    }
    public function create(Request $request){
        $telefonia=new Telefonia();
        $telefonia->plan=$request->plan;
        $telefonia->minutos=$request->minutos;
        $telefonia->save();
        $_SESSION["telefonia"]='finish';
        return redirect()->route("telefonia.show");
    }
}
