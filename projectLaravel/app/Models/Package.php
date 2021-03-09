<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    //relacion one to one
    public function internet()
    {
        return $this->belongsTo(Internet::class);
    }
    public function cable()
    {
        return $this->belongsTo(Cable::class);
    }
    public function telefonia()
    {
        return $this->belongsTo(Telefonia::class);
    }
}
