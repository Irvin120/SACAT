<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;




Route::get('base',function(){ 
    return view ('archivoBaseAdmin.base'); });



  
// login
Route::get('/login', function () {
    return view('login/login');
}); 


// Registro de usuarios
Route::get('/register-user', function () {
    return view('login/register-user');
});
// Registro de usuarios GUARDADO
Route::get('/save-register', function () {
    return view('login/saveregister');
});


// Restraurar contraseña
Route::get('/restaure-password', function () {
    return view('login/restore-password');
});
// Restraurar contraseña GUARDADA
Route::get('/save-restaure', function () {
    return view('login/save-restore');
});



// Panel admin
Route::get('/panel-admin', function () {
    return view('archivoBaseAdmin/baseAdmin');
});

// Panel de admin para actividaes
Route::get('/panel-admin-activid', function () {
    return view('admin/panelactividades');
});


//Ruta del panel principal del administardor
Route::get('mainAdmin', [AdminController::class, 'index'])->name('mainAdmin');
Route::get('mainAdmin/createActiviad',[AdminController::class, 'createActividad'])->name('agregarActividad');



//Creacion de una nuea aula
Route::post('mainAdmin/crAu', [AdminController::class, 'store'])->name('createAula');
//Eliminacion de la aula
Route::delete('mainAdmin/delete/{id}', [AdminController::class, 'destroy'])->name('destroyAula');
//Actualizacion del nombre del aula
Route::put('mainAdmin/update/{id}', [AdminController::class, 'update'])->name('updateAula');



Route::get('mainUser',function(){ return view ('user.mainUser'); });
