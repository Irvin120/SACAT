<?php

namespace App\Http\Controllers;
use App\Models\Aula;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccesoController extends Controller
{

    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request){
        $credentials = $request->only('correoAdmin', 'contraseñaAdmin');

        $admin = Admin::where('correoAdmin', $credentials['correoAdmin'])->first();
        $idAdmin= session('idAdmin');



        if ($admin && Hash::check($credentials['contraseñaAdmin'], $admin->contraseñaAdmin)) {
            Auth::guard('admin')->login($admin);

            return redirect()->route('mainAdmin', ['idAdmin' => $admin->idAdmin]);


        }else{
            return redirect()->back()->withErrors([
                'message' => 'Las credenciales proporcionadas son incorrectas.',
            ]);
        }


    }


    public function logout(Request $request)
{
    Auth::guard('admin')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login')->with('success', 'Has cerrado sesión correctamente.');
}

//     public function createAdmin()
// {
//     $admin = new Admin;
//     $admin->nombreAdmin = 'admin';
//     $admin->apellidosAdmin = 'admin';
//     $admin->correoAdmin = 'admin@admin.com';
//     $admin->contraseñaAdmin = Hash::make('12345678');
//     $admin->save();
// }

}

