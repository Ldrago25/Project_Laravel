<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    //method to search user in database
    public function validateUser(Request $request){
        
        //hago la peticion a la base de datos
        $user=DB::table('users')->where('email',$request->email)->first();
      
        //valido que el objeto que me devuelva no sea null
        if(is_object($user)){
            //si se encontro el objeto del usuario validar contrasenia
            if($user->password==$request->password){
                return $user;
            }else{
                return "Contrasenia erronea";
            }
        }
        return "Usuario no encontrado";
    }

    public function validateForm(Request $request){
        if($request->password1!=$request->password){
            return 'contrasenias no iguales';
        }else{
            try{
                $result= DB::table('users')->insert([
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'email_verified_at'=> now()->utc(),
                    'created_at'=>now()->utc(),
                    'rol'=>'suscriptor',
                    ]);
                return 'finish';
               }catch(Exception $e){
                   return "correo repetido";
               }
        }
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }
}
