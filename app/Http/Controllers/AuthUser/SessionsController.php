<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
    public function create(){
        return view('loginUser.login-user');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('correoUsuario', 'contraseñaUsuario');

        $user = usuario::where('correoUsuario', $credentials['correoUsuario'])->first();
        $idUsuario = session('idUsuario');
        

        if ($user && Hash::check($credentials['contraseñaUsuario'], $user->contraseñaUsuario)) {
            Auth::guard('usuario')->login($user);

            return redirect()->route('mainUser', ['idUsuario' => $user->idUsuario]);
        } else {
            return redirect()->back()->withErrors([
                'message' => 'Las credenciales proporcionadas son incorrectas.',
            ]);
        }
    }
}
