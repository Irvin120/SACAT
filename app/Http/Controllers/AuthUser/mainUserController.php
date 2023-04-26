<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aula;


class mainUserController extends Controller
{
    //
    public function mainUser(){
        $aulas = Aula::all();

        return view('user.mainUser', compact('aulas'));
    }


    public function searchAula(Request $request){
        $query = $request->get('query');
        $aulas = Aula::where('nombreAula', 'like', '%' . $query . '%')
                      ->orWhere('idAula', $query)
                      ->get();
        return view('user.mainUser', compact('aulas'));
    }
}

