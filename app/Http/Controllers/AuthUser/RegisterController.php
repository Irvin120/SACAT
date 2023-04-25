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
        $messages = [
            'required' => 'El campo :attribute es obligatorio',
            'email' => 'El campo :attribute debe ser una dirección de correo válida',
            'unique' => 'El valor del campo :attribute ya está en uso',
            // Otras reglas de validación y sus mensajes de error personalizados...
        ];
        
        $validatedData = $request->validate([
            'nombreUsuario' => 'required',
            'apellidosUsuario' => 'required',
            'matriculaUsuario' => [
                'required',
                'unique:usuario,matriculaUsuario',
                'regex:/^\d{8}$/',
            ],
            'correoUsuario' => [
                'required',
                'unique:usuario,correoUsuario',
                'email',
            ],
            'contraseñaUsuario' => 'required',
        ], $messages);

            $user = new usuario();
            $user->nombreUsuario = $validatedData['nombreUsuario'];
            $user->apellidosUsuario = $validatedData['apellidosUsuario'];
            $user->matriculaUsuario = $validatedData['matriculaUsuario'];
            $user->correoUsuario = $validatedData['correoUsuario'];
            $user->contraseñaUsuario = Hash::make($validatedData['contraseñaUsuario']);
            $user->timestamps = false;
            $user->save();
            /*
            $user = new usuario();
            $user->nombreUsuario = $request->post('nombreUsuario');
            $user->apellidosUsuario = $request->post('apellidosUsuario');
            $user->matriculaUsuario = $request->post('matriculaUsuario');
            $user->correoUsuario = $request->post('correoUsuario');
            $user->contraseñaUsuario = Hash::make($request->post('contraseñaUsuario'));
            $user->timestamps = false; // indicamos que no se usen las columnas "updated_at" y "created_at"
            $user->save();*/
        
        return redirect('/save-register');
    }
}
    
