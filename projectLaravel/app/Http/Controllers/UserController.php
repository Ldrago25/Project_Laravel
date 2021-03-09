<?php
//create a controller to use pages of users
namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//method to initial session
session_start();

// class UserController to access pages login and create
class UserController extends Controller
{
    //method to call login page
    public function login($valueLogin){
        return view('user.login',compact('valueLogin'));
    }
    //method to call create page
    public function create($valueValidate){
        return view('user.create',compact('valueValidate'));
    }

    //method to receive the form data login
    public function userValidate(Request $request){
        //validar datos que llegan del formulario
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);


        $Objectuser=new User();
        $user=$Objectuser->validateUser($request);
        //valido que  la respuesta sea un usuario o no
        if(is_object($user)){

            $_SESSION["user"]=$user;
            if(isset($_SESSION["user"])&&$_SESSION["user"]->rol=='admin'){
                return view("user.admin");
            }else{
                return view("user.suscriptor");
            }

        }else if($user=='Contrasenia erronea'){
            return redirect()->route('/userLogin','contrasenia erronea');
        }else{
            return redirect()->route('/userLogin','usuario no encontrado');
        }
    }

    //method to receive the form data
    public function createForm(Request $request){
        $userValidate= new User();
        $validate=$userValidate->validateForm($request);
        if($validate=='contrasenias no iguales'){
            $_SESSION["error"]='contrasenias no iguales';
            return redirect()->route('/userCreate','null');
        }else if($validate=='correo repetido'){
            $_SESSION["error"]='correo repetido';
            return redirect()->route('/userCreate','null');
        }else{
            $_SESSION["error"]='finish';
            return redirect()->route('/userCreate','null');
        }
    }
    public function packages(){
        $packages=Package::all();

        return view('user.packages',compact('packages'));
    }

    public function buyPackage($id){
        $result=DB::table('users')->where('id',$_SESSION["user"]->id)->update([
            'package_id'=>$id
        ]);
        $_SESSION["buy"]='update';
        return redirect()->route('user.packages');
    }
}
