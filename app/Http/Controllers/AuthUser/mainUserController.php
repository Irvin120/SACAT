<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\actividad;
use App\Models\solicitud;
use App\Models\usuario;
use DateTime;
use App\Models\RegistroActividad;



class mainUserController extends Controller
{
    //

    public function mainUser(Request $request, $idUsuario, $correoUsuario)
    {
        $correoUsuarioEncryp = $correoUsuario;

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
            return view('user.mainUser', compact('nombreUsuario', 'aulas', 'idUsuario', 'correoUsuario', 'aulasPermitidas', 'correoUsuarioEncryp'));
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

    public function entradaAulaUser($idAula, $idUsuario, $correoUsuarioEncryp)
    {
        try {
            $correoUsuario = decrypt($correoUsuarioEncryp);
        } catch (\Exception $e) {
            // manejar el error como desees, por ejemplo:
            return back()->with('message', 'Ha ocurrido un error ');
        }

        // obtener el usuario autenticado
        $user = Usuario::find($idUsuario);
        $aula = Aula::find($idAula);
        $actividades = $aula->actividades;

        if ($user && $user->correoUsuario === $correoUsuario) {
            return view('user.actividadesUser', compact('user', 'actividades', 'correoUsuarioEncryp'));
        } else {
            return back()->with('message', 'No se pudo autenticar al usuario');
        }
    }

    public function entradaActividadUser($idActividad, $nombreActividad, $idUsuario, $correoUsuarioEncryp)
    {
        try {
            $correoUsuario = decrypt($correoUsuarioEncryp);
        } catch (\Exception $e) {
            // manejar el error como desees, por ejemplo:
            return back()->with('message', 'Ha ocurrido un error');
        }

        $usuario = Usuario::find($idUsuario);

        if ($usuario && ($usuario->correoUsuario == $correoUsuario)) {
            $actividad = Actividad::find($idActividad);

            $fechaInicio = new DateTime($actividad->fechaInicio); // fecha de inicio definida por el admin
            $fechaFin = new DateTime($actividad->fechaFin); // fecha de finalización definida por el admin
            $intervalo = $fechaInicio->diff($fechaFin);
            $numDias = $intervalo->days + 1; // agregamos 1 para incluir el último día

            $dias = array();
            for ($i = 0; $i < $numDias; $i++) {
                $dias[] = $fechaInicio->format('Y-m-d');
                $fechaInicio->modify('+1 day');
            }



            return view('user.checklisUser', compact('actividad', 'usuario', 'dias'));
        } else {
            // hacer algo si el usuario no existe o el correo no coincide
            return back()->with('error', 'El usuario no existe o el correo no coincide');
        }
    }


    public function registrarActividad(Request $request) {
        $idActividad = $request->input('idActividad');
        $idUsuario = $request->input('idUsuario');
        $dias = $request->input('dias');
        $resumen = $request->input('resumen');

        foreach ($dias as $dia) {
            $registroActividad = new RegistroActividad;
            $registroActividad->idActividad = $idActividad;
            $registroActividad->idUsuario = $idUsuario;
            $registroActividad->fechaRegistroActividad = $dia;
            $registroActividad->resumenRegistroActividad = $resumen;
            $registroActividad->estadoActividad = 0;
            $registroActividad->save();
        }

        return back()->with('success', 'Actividad registrada con éxito.');
    }


}
