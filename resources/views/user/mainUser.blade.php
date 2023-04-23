@extends('archivoBaseUser.baseUser')

@section('title', 'Main-User')


@section('content')

<link rel="stylesheet" href="{{ asset('css/user/mainUser.css')}}">

<div class="content">
    <div class="content-user ">
        <div class="nombreUser">
            <h2 class="text-start text-white">Bienvenido @user123</h2>
        </div>
        <div class="fechaUser">
            <h2 class="text-end">Fecha: 01/03/2023</h2>
        </div>
    </div>
    <div class="content-search">
        <div class="tittleAulas">
            <h2 class="text-start f">Aulas Disponibles</h2>
        </div>
        <div class="search" id="ctn-bars-search">
            <input type="text" id="inputSearch" class="input-search" placeholder="Buscar Aula..." maxlength="20">
            <i class="fa-solid fa-magnifying-glass btn-icon" id="icon-search"></i>
        </div>
    </div>
    <ul id="box-search">
        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Planeación Organización del trabajo</a></li>
        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Expresión Original y Escrita</a></li>
        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Base de datos</a></li>
        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i>Desarrollo Web Profesional</a></li>
    </ul>
    <div class="content-aulas">
        <div class="no-hay"><h3>NO HAY AULAS</h3></div>
    </div>
</div>

<script href="{{ asset('js/mainUser.js')}}"></script>
@endsection
