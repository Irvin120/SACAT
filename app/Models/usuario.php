<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $guard = 'usuario';
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $fillable = [
        'nombreUsuario', 'apellidosUsuario', 'correoUsuario', 'contraseñaUsuario'
    ];

    protected $hidden = [
        'contraseñaUsuario',
    ];
}
