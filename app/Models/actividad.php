<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    protected $table = 'actividad';

    public function aula()
    {
        return $this->belongsTo('App\Models\Aula', 'idAula');
    }

}
