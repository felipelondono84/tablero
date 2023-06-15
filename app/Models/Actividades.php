<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    public function meta(){
        return $this->belongsTo(Metas::class, 'meta_id', 'id');
    }
}
