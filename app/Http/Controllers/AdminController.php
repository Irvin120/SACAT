<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Aula;
use App\Models\usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $datos = aula::all();
        return view('admin.mainAdmin', compact('datos'));
    }

    public function createActividad()
    {
        return view('admin.createActividad');
    }



    public function store(Request $request)
    {
        $aula = new Aula;
        $aula->nombreAula = $request->post('nombreAula');
        $aula->asignatura = $request->post('asignatura');
        $aula->grupo = $request->post('grupo');
        $aula->idAdmin = 2;
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
        $aula->delete();
        return back();
    }
}
