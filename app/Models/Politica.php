<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politica extends Model
{
    use HasFactory;

    public function hechos(){
        return $this->belongsTo(Hechos::class, 'hechos_id', 'id');
    }
}
