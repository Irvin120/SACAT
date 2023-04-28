<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    public $timestamps = false;


    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'idUsuario');
    }
}
