<?php

namespace Database\Seeders;

use App\Models\Programation;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //User::factory(10)->create(); 
         //user admin
         DB::table('users')->insert([
            'name'=>'Brandon',
            'surname'=>'Vargas',
            'email'=>'brandon1@gmail.com',
            'password'=>'123',
            'rol'=>'admin',
            'email_verified_at'=>now()
         ]);  
         DB::table('canales')->insert([
            'name'=>'Venevision',
            'created_at'=>now()
         ]); 
         DB::table('canales')->insert([
            'name'=>'HBO',
            'created_at'=>now()
         ]); 
         DB::table('canales')->insert([
            'name'=>'FX',
            'created_at'=>now()
         ]); 
         DB::table('canales')->insert([
            'name'=>'Mtv',
            'created_at'=>now()
         ]); 
         Programation::factory(40)->create();
    }
}
