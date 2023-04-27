<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
//------------controladores de sesion de usuario--------------------

use App\Http\Controllers\AuthUser\RegisterController;
use App\Http\Controllers\AuthUser\SessionsController;
use App\Http\Controllers\AuthUser\mainUserController;
use App\Http\Controllers\funtUser\BuscadorController;
//-----------------------inicion----------------------------------

Route::get('/', function () {
    return view('inicio.archivoinicio');
});


//------------------------------------usuarios------------------------------------------------

//vista de login
Route::get('/login-user',[SessionsController::class, 'create'])->name('login-user');

// Ruta para procesar la información del formulario de login

//ruta para el logout
Route::post('/logout-user',[SessionsController::class, 'logoutUser'])->name('logout-user');


// Vista de registro
Route::get('/register-user', [RegisterController::class, 'create'])->name('register.create');
//
Route::post('/register-user', [RegisterController::class, 'store'])->name('register.store');

// Registro de usuarios creado con exito
Route::get('/save-register', function () {
    return view('loginUser/saveregister');
});

// buscador de aulas del Usuario

// Restraurar contraseña
Route::get('/restaure-password', function () { return view('loginUser/restore-password'); });
// Restraurar contraseña GUARDADA
Route::get('/save-restaure', function () { return view('loginUser/save-restore'); });

Route::get('actividadesUser', function () {
    return view('user.actividadesUser');
});
Route::get('checklisUser', function () {
    return view('user.checklisUser');
});










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


// ----------------------------------------user-----------------------------
Route::post('/login-user', [SessionsController::class, 'loginUser'])->name('login-inicio');

Route::get('/user/mainUser/{idUsuario}/{correoUsuario}', [mainUserController::class, 'mainUser'])->name('mainUser')->middleware('auth.user');

Route::get('/user/searchAula', [mainUserController::class, 'searchAula'])->name('searchAula');
