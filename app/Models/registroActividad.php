<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registroActividad extends Model
{
    use HasFactory;

    protected $table = 'registroactividad';
    protected $primaryKey = 'idRegistroActividad';
    public $timestamps = false;

}
