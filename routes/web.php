<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;






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





Route::get('mainUser', function () {
    return view('user.mainUser');
});
Route::get('inicio', function () {
    return view('inicio.archivoinicio');
});






//------------------------------------------------Ruta del panel principal del administardor--------------------

// login
Route::get('/login',[AccesoController::class, 'showLogin'])->name('login');
Route::post('/login',[AccesoController::class, 'login'])->name('loginPost');
Route::get('/logincre',[AccesoController::class, 'createAdmin'])->name('loginPostd');
Route::post('/logout', [AccesoController::class, 'logout'])->name('logout');


Route::get('mainAdmin/{idAdmin}', [AdminController::class, 'index'])
    ->name('mainAdmin')
    ->middleware(adminMiddleware::class);

//Creacion de una nuea aula
Route::post('mainAdmin/crAu', [AdminController::class, 'store'])->name('createAula');
//Eliminacion de la aula
Route::delete('mainAdmin/delete/{id}', [AdminController::class, 'destroy'])->name('destroyAula');
//Actualizacion del nombre del aula
Route::put('mainAdmin/update/{id}', [AdminController::class, 'update'])->name('updateAula');

// Panel de admin para actividaes
Route::get('/panel-admin-activid', function () { return view('admin/panelactividades'); });

Route::get('mainAdmin/createActividad/{idAula}', [AdminController::class, 'createActividad'])->name('agregarActividad');

