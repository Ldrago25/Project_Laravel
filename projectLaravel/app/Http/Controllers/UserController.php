<?php
//create a controller to use pages of users
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// class UserController to access pages login and create
class UserController extends Controller
{
    //method to call login page
    public function login(){
        return view('user.login');
    }
    //method to call create page
    public function create(){
        return view('user.create');
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

    }
    //method to receive the form data
    public function createForm(Request $request){

    }
}
