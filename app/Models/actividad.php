<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    protected $table = 'actividad';
    public $timestamps = false;

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'idAula');
    }

}
