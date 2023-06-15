<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    use HasFactory;

    public function hechos(){
        return $this->belongsTo(Hechos::class, 'hechos_id', 'id');
    }
    public function politica(){
        return $this->belongsTo(Politica::class, 'politica_id', 'id');
    }
    public function estrategias(){
        return $this->belongsTo(Estrategia::class, 'estrategias_id', 'id');
    }
    public function programas(){
        return $this->belongsTo(Programas::class, 'programa_id', 'id');
    }
}
