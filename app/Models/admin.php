<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'admin';
    protected $primaryKey = 'idAdmin';

    protected $fillable = [
        'nombreAdmin', 'apellidosAdmin', 'correoAdmin', 'contraseñaAdmin'
    ];

    protected $hidden = [
        'contraseñaAdmin',
    ];

    public function aulas()
    {
        return $this->hasMany('App\Models\Aula', 'idAdmin');
    }

    public function actividades()
    {
        return $this->hasManyThrough('App\Models\Actividad', 'App\Models\Aula', 'idAdmin', 'idAula');
    }

}
