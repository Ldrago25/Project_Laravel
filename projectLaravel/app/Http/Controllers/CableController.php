<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cable;
use Illuminate\Http\Request;
session_start();

class CableController extends Controller
{
    public function showCable(){
        return view("services.cable");
    }
    public function create(Request $request){
        $cable=new Cable();
        $cable->plan=$request->plan;
        $cable->save();
        $_SESSION["cable"]='finish';
        return redirect()->route("cable.show");
    }
}
