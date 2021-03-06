<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canale extends Model
{
    use HasFactory;
    
    public function programations(){
        return $this->hasMany(Programation::class);
    }
}
