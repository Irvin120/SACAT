<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
//------------controladores de sesion de usuario--------------------

use App\Http\Controllers\AuthUser\RegisterController;
use App\Http\Controllers\AuthUser\SessionsController;
//-----------------------inicion----------------------------------

Route::get('/', function () {
    return view('inicio.archivoinicio');
});



//------------------------------------usuarios------------------------------------------------

//login user 
Route::get('/login-user',[SessionsController::class, 'create'])->name('login-user');


// Registro de usuarios
Route::get('/register-user', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register-user', [RegisterController::class, 'store'])->name('register.store');

// Registro de usuarios GUARDADO
Route::get('/save-register', function () {
    return view('loginUser/saveregister');
});


// Restraurar contraseña
Route::get('/restaure-password', function () {
    return view('loginUser/restore-password');
});
// Restraurar contraseña GUARDADA
Route::get('/save-restaure', function () {
    return view('loginUser/save-restore');
});


<<<<<<< HEAD
=======

// Panel admin
Route::get('/panel-admin', function () {
    return view('archivoBaseAdmin/baseAdmin');
});





>>>>>>> 5708e6e1fae02b0c118e9edcf9e622b434bdd85c
Route::get('mainUser', function () {
    return view('user.mainUser');
});
Route::get('actividadesUser', function () {
    return view('user.actividadesUser');
});
Route::get('checklisUser', function () {
    return view('user.checklisUser');
});



<<<<<<< HEAD
=======
Route::get('inicio', function () {
    return view('inicio.archivoinicio');
});




>>>>>>> 5708e6e1fae02b0c118e9edcf9e622b434bdd85c


//------------------------------------------------Ruta del panel principal del administardor--------------------

// Panel admin
Route::get('/panel-admin', function () {
    return view('archivoBaseAdmin/baseAdmin');
});

// Panel de admin para actividaes
Route::get('/panel-admin-activid', function () {
    return view('admin/panelactividades');
});


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

Route::post('mainAdmin/createActividad/', [AdminController::class, 'nuevaActividad'])->name('nuevaActividad');
Route::post('mainAdmin/deleteActividad/{idActividad}', [AdminController::class, 'deleteActividad'])->name('deleteActividad');
