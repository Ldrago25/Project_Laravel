<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Internet;
use Illuminate\Http\Request;
session_start();
class InternetController extends Controller
{
    public function showInternet(){
        return view('services.internet');
    }
    public function create(Request $request){
        $internet=new Internet();
        $internet->plan=$request->plan;
        $internet->megas=$request->megas;
        $internet->save();
        $_SESSION["internet"]='finish';
        return redirect()->route("internet.show");
    }
}
