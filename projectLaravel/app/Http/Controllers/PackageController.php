<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Internet;
use App\Models\Telefonia;
use App\Models\Cable;
use App\Models\Package;
use Illuminate\Http\Request;
session_start();
class PackageController extends Controller
{
    public function show(){
        //usando eloquent
        $internets=Internet::all();
        $cables=Cable::all();
        $telefonias=Telefonia::all();
        //return $cables[0]->canales;
        return view("services.package",compact('internets','cables','telefonias'));
    }
    public function create(Request $request){
        //usando eloquent
        $package=new Package();
        $package->internet_id=$request->internet;
        $package->cable_id=$request->cable;
        $package->telefonia_id=$request->telefonia;
        $package->monto=$request->monto;
        $package->save();
        $_SESSION["package"]='finish';
        return redirect()->route("package.show");
    }
    
}
