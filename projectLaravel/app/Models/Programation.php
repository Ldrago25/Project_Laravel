<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programation extends Model
{
    use HasFactory;
    //relacion one to one
    public function canale(){
        return $this->belongsTo(Canale::class);
    }

}
