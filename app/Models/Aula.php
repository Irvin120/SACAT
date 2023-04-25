<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    protected $table = 'aula';
    protected $primaryKey = 'idAula';

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'idAdmin');
    }

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'idAula');
    }

}
