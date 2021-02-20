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
       // $user=User::all();
        return view('user.login');
    }
    //method to call create page
    public function create(){
        return view('user.create');
    }
}
