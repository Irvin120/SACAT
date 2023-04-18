<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('base',function(){ return view ('archivoBaseAdmin.base'); });


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


Route::get('inicio',function(){ return view ('inicio.archivoinicio'); });
