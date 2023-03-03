@extends('archivoBaseUser.baseUser')

@section('title', 'Main-User')


@section('content')

<link rel="stylesheet" href="{{ asset('css/user/mainUser.css')}}">

<div class="content mainConten row align-content-center">

    <div class="nombreUser col-6">
        <h2  class="text-start text-white">Bienvenido @user123</h2>
    </div>

    <div class="fechaUser col-6 text-right">
        <h2  class="text-end">Fecha: 01/03/2023</h2>
    </div>
</div>

<div class="content mainConten3 row align-content-center">

    <div class="titleAulas col-6">
        <h2  class="text-start f">Aulas Disponibles</h2>
    </div>

    <div class="search col-6 text-right">
        <input class="input-search" placeholder="Buscar Aula" type="text" maxlength="20" >
        <button class="btn btn-icon" type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

@endsection
