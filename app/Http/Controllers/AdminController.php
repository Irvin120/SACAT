<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Aula;
use App\Models\Actividad;
use App\Models\solicitud;
use App\Models\registroActividad;
use DateTime;


use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index($idAdmin)
    {
        $admin = Admin::find($idAdmin);


        $datos = aula::all();
        return view('admin.mainAdmin', compact('datos', 'admin'));
    }

    public function createActividad(Request $request)
    {
        try {
            $idAula = $request->route('idAula');
            $aula = Aula::findOrFail($idAula);
            $actividades = $aula->actividades;
            $solicitudes = solicitud::where('idAula', $idAula)
                ->where('estado', 'pendiente')
                ->get();

            return view('admin.panelactividades', compact('aula', 'actividades', 'solicitudes'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return abort(404, 'El ID de Aula proporcionado no es válido');
        }
    }

    public function revisionActividad($idActividad)
    {
        $actividad = Actividad::find($idActividad);
        $registros = RegistroActividad::where('idActividad', $idActividad)->get();
        $usuarios = Usuario::whereIn('idUsuario', $registros->pluck('idUsuario')->unique())->get();


        $fechaInicio = new DateTime($actividad->fechaInicio);
        $fechaFin = new DateTime($actividad->fechaFin);
        $intervalo = $fechaInicio->diff($fechaFin);
        $numDias = $intervalo->days + 1; // agregamos 1 para incluir el último día


        $dias = array();
        for ($i = 0; $i < $numDias; $i++) {
            $dias[] = $fechaInicio->format('Y-m-d');
            $fechaInicio->modify('+1 day');
        }

        return view('admin.revisionActividad', compact('actividad', 'registros', 'dias', 'usuarios'));
    }



    public function store(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if (!$admin) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión como administrador.');
        }
        $aula = new Aula;
        $aula->nombreAula = $request->post('nombreAula');
        $aula->asignatura = $request->post('asignatura');
        $aula->grupo = $request->post('grupo');
        $aula->idAdmin = $admin->idAdmin;
        $aula->timestamps = false; // indicamos que no se usen las columnas "updated_at" y "created_at"
        $aula->save();

        return back();
    }

    public function show(admin $admin)
    {
        //
    }

    public function edit(admin $admin)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $aula = Aula::where('idAula', $id)->first();

        if ($aula) {
            $aula->nombreAula = $request->post('nombreAula');
            $aula->timestamps = false;
            $aula->save();
            return back();
        }
    }

    public function destroy($id)
    {
        $aula = Aula::where('idAula', $id)->first();
        if ($aula) {
            $aula->delete();
        }
        return back();
    }

    public function nuevaActividad(Request $request)
    {

        $admin = Auth::guard('admin')->user();

        if (!$admin) {
            return redirect()->route('login');
        }

        $actividad = new Actividad();
        $actividad->nombreActividad = $request->post('nombreActividad');
        $actividad->resumen = $request->post('resumen');
        $actividad->fechaInicio = $request->post('fechaInicio');
        $actividad->fechaFin = $request->post('fechaFin');
        $actividad->idAula = $request->post('idAula');
        $actividad->save();
        return back();
    }

    public function deleteActividad(Request $request, $idActividad)
    {
        $actividad = Actividad::where('idActividad', $idActividad);
        $actividad->delete();

        return redirect()->back();
    }

    public function aceptarSolicitud($idSolicitud)
    {
        try {
            $solicitud = solicitud::findOrFail($idSolicitud);
            $solicitud->estado = "aceptado";
            $solicitud->save();
            return back();
        } catch (\Exception $e) {
            return back()->with('error', 'No se pudo aceptar la solicitud: ' . $e->getMessage());
        }
    }

    public function eliminarSolicitud($idSolicitud)
    {
        try {
            solicitud::destroy($idSolicitud);
            return back();
        } catch (\Exception $e) {
            return back()->with('error', 'No se pudo aceptar la eliminación: ' . $e->getMessage());
        }
    }
}
