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

// login user
Route::get('/login-mr', function () {
    return view('login/login-user');
});

// login admin
Route::get('/login-ad', function () {
    return view('login/login-admin');
});

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









//------------------------------------------------Ruta del panel principal del administardor--------------------



// login
Route::get('/login',[AccesoController::class, 'showLogin'])->name('login');
Route::post('/login',[AccesoController::class, 'login'])->name('loginPost');
Route::get('/logincre',[AccesoController::class, 'createAdmin'])->name('loginPostd');
Route::post('/logout', [AccesoController::class, 'logout'])->name('logout');


Route::get('mainAdmin/{idAdmin}', [AdminController::class, 'index']) ->name('mainAdmin') ->middleware(adminMiddleware::class);

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

//aceptacion de solicitudes
Route::post('/aceptar-solicitud/{idSolicitud}',[AdminController::class, 'aceptarSolicitud'])->name('aceptarSolicitud');
//eliminar solicitud
Route::delete('/eliminar-solicitud/{idSolicitud}', [AdminController::class, 'eliminarSolicitud' ])->name('eliminarSolicitud');




// ----------------------------------------user-----------------------------
Route::post('/login-user', [SessionsController::class, 'loginUser'])->name('login-inicio');

Route::get('/user/mainUser/{idUsuario}/{correoUsuario}', [mainUserController::class, 'mainUser'])->name('mainUser')->middleware('auth.user');

Route::get('/user/searchAula', [mainUserController::class, 'searchAula'])->name('searchAula');

Route::post('/user/enviarSolicitud', [mainUserController::class, 'enviarSolicitud'])->name('enviarSolicitud');

Route::post('/user/enviarSolicitud', [mainUserController::class, 'enviarSolicitud'])->name('enviarSolicitud')->middleware('auth.user');




// acceso a el aula
Route::get('user/aula/{idAula}/{idUsuario}/{correoUsuarioEncryp}', [mainUserController::class, 'entradaAulaUser'])->name('entradaAulaUser')->middleware('auth.user');

Route::get('user/aula/checklisUser/{idActividad}/{nombreActividad}/{idUsuario}/{correoUsuarioEncryp}', [mainUserController::class, 'entradaActividadUser']);


Route::post('/registrar-actividad', [mainUserController::class, 'registrarActividad'])->name('registrarActividad')->middleware('auth.user');
