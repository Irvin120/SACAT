<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Aula;
use App\Models\Actividad;


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

            return view('admin.panelactividades', compact('aula','actividades'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return abort(404, 'El ID de Aula proporcionado no es válido');
        }
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

    public function nuevaActividad(Request $request){

        $admin = Auth::guard('admin')->user();

        if (!$admin){
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

    public function deleteActividad(Request $request, $idActividad){
        $actividad = Actividad::where('idActividad', $idActividad);
        $actividad->delete();

        return redirect()->back();
    }

}
