<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Canale;
use App\Models\Programation;

session_start();
class CanaleController extends Controller
{
    public function all($valor){
        if($valor==0){
            $canals=Canale::all();
            return view("programation",compact('canals','valor'));
        }
        if($valor==1){
            return view("programation",compact('canals','valor'));
        }
        if($valor==2){
            return view("programation",compact('canals','valor'));
        }
        
    }
    //con este metodo se busca la programacion o canal teniendo un name en un input name="search" 
     public function searchs(Request $request)
    {
        //valor para saber si mando canal o programacion
        $valor=0;
        //buscando por canal
        $canal=Canale::where('name',$request->name)->first();
        if(is_object($canal)){
            $valor=1;
            $_SESSION["canal"]=$canal;
            return redirect()->route("canals.all",$valor);
        }else{
            $programation=Programation::where('name',$request->name)->first();
            $valor=2;
            $_SESSION["programation"]=$programation;
            return redirect()->route("canals.all",$valor);
        }
    }
}
