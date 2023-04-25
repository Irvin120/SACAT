<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\usuario;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function create(){
        return view('loginUser.register-user');
    }

    public function store(Request $request){

            $user = new usuario();
            $user->nombreUsuario = $request->post('nombreUsuario');
            $user->apellidosUsuario = $request->post('apellidosUsuario');
            $user->matriculaUsuario = $request->post('matriculaUsuario');
            $user->correoUsuario = $request->post('correoUsuario');
            $user->contraseñaUsuario = $request->post('contraseñaUsuario');
            $user->timestamps = false; // indicamos que no se usen las columnas "updated_at" y "created_at"
            $user->save();
        
        return redirect('/save-register');
    }
    
}
