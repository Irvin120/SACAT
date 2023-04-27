<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\actividad;
use App\Models\usuario;


class mainUserController extends Controller
{
    //

    public function mainUser(Request $request, $idUsuario, $correoUsuario)
    {
        // desencriptar el correo electrónico
        $correoUsuario = decrypt($correoUsuario);

        // obtener el usuario autenticado
        $user = Usuario::find($idUsuario);

        // asegurarse de que el usuario autenticado es el mismo que se está buscando
        if ($user && $user->correoUsuario === $correoUsuario) {
            // obtener el valor de la consulta
            $query = $request->input('query');

            // obtener las aulas que coinciden con la consulta
            $aulas = Aula::where('nombreAula', 'like', '%' . $query . '%')->paginate(5);

            // obtener el nombre del usuario autenticado
            $nombreUsuario = Auth::guard('usuario')->user()->nombreUsuario;

            // pasar las variables a la vista
            return view('user.mainUser', compact('nombreUsuario', 'aulas', 'idUsuario', 'correoUsuario'));
        } else {
            abort(404);
        }
    }
}
