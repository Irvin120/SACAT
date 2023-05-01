<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\actividad;
use App\Models\solicitud;
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

            // obtener las aulas en las que el usuario no esta registrado y en el caso de que busque, que vea incluso si si ya esta registrado
            $aulas = Aula::whereNotIn('idAula', function ($query) use ($idUsuario) {
                $query->select('idAula')
                    ->from('solicitudes')
                    ->where('idUsuario', $idUsuario);
            })
                ->where(function ($query) use ($request) {
                    $query->where('nombreAula', 'like', '%' . $request->input('query') . '%');
                })
                ->paginate(5);


            //obtener las aulas donde el usuario este registrado
            $aulasPermitidas = Aula::whereHas('solicitudes', function ($query) use ($idUsuario) {
                $query->where('idUsuario', $idUsuario)
                    ->where('estado', 'aceptado');
            })->get();


            // obtener el nombre del usuario autenticado
            $nombreUsuario = Auth::guard('usuario')->user()->nombreUsuario;

            // pasar las variables a la vista
            return view('user.mainUser', compact('nombreUsuario', 'aulas', 'idUsuario', 'correoUsuario', 'aulasPermitidas'));
        } else {
            abort(404);
        }
    }

    public function enviarSolicitud(Request $request)
    {
        //obtenemos los valores del formulario
        $idUsuario = $request->input('idUsuario');
        $idAula = $request->input('idAula');

        //verifico si ya existe una solicitu en la aula del usuario
        $solicitudExistente = solicitud::where('idUsuario', $idUsuario)->where('idAula', $idAula)->first();

        if ($solicitudExistente) {
            return back()->with('error', 'Ya existe una solicitud pendiente para este aula.');
        } else {

            //creacion de un nuevo registro en la base de datos
            $solicitud = new solicitud();
            $solicitud->idUsuario = $idUsuario;
            $solicitud->idAula = $idAula;
            $solicitud->estado = 'pendiente';
            $solicitud->save();

            // Redirigimos al usuario a la misma página con un mensaje de éxito
            return back()->with('success', 'Solicitud Enviada correctamente');
        }
    }

    public function entradaAulaUser(Request $request)
    {
    

        try {
            $idAula = $request->route('idAula');
            $aula = Aula::findOrFail($idAula);
            $actividades = $aula->actividades;
            $solicitudes = solicitud::where('idAula', $idAula)
                ->where('estado', 'aceptado')
                ->get();

            return view('user.actividadesUser', compact('aula', 'actividades', 'solicitudes'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return abort(404, 'El ID de Aula proporcionado no es válido');
        }
    }
}
