<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrategias extends Model
{
    use HasFactory;

    public function hechos(){
        return $this->belongsTo(Hechos::class, 'hechos_id', 'id');
    }
    public function politica(){
        return $this->belongsTo(Politica::class, 'politica_id', 'id');
    }
}
