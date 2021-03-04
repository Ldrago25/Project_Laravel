<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class User extends Model
{
    use HasFactory;
    //method to search user in database
    public function validateUser(Request $request){
       
        //hago la peticion a la base de datos
        $user=DB::table('users')->where('email',$request->email)->first();
        //valido que el objeto que me devuelva no sea null
        if(!isNull($user)){
            //si se encontro el objeto del usuario validar contrasenia
            if($user->password==$request->password){
                return $user;
            }else{
                return "Contrasenia erronea";
            }
        }
        return "Usuario no encontrado";
    }
}
