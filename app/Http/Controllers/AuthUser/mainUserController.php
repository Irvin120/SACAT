<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainUserController extends Controller
{
    //
    public function mainUser(){
        return view('user.mainUser');
    }

}
