<?php

use App\Http\Controllers\Controller;
use App\Models\Aula;
use App\Models\usuario;

class BuscadorController extends Controller
{
    public function indexUsuario()
    {
        $datos = Aula::all();
        return view('user.mainUser', compact('datos'));
    }
}
