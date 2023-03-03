<?php

use Illuminate\Support\Facades\Route;



Route::get('base',function(){
    return view ('archivoBaseAdmin.base');
});


Route::get('mainAdmin',function(){
    return view ('admin.mainAdmin');
});

Route::get('mainUser',function(){
    return view ('user.mainUser');
});
