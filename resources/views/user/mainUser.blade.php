@extends('archivoBaseUser.baseUser')

@section('title', 'Main-User')


@section('content')

<link rel="stylesheet" href="{{ asset('css/user/mainUser.css')}}">

<div class="content">
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
    <div id="ventana-emergente">
        <h2>Enviar solicitud a aula</h2>
        <p>Expresión Original y Escrita</p>
        <div class="input-container">
            <input type="text" class="ingreso-id" placeholder="Ingrese ID">
        </div>
        <div class="botones-container">
            <button id="boton-cancelar">Cancelar</button>
            <button id="boton-enviar">Enviar</button>
        </div>
    </div>
    <div id="ventana-emergente-confirmacion">
        <h2>Enviar solicitud a aula</h2>
        <p>Se ha enciado tu solicitud a <br><span>"Expresión Original y Escrita"</span></p>
        <div class="botones-container">
            <button id="boton-volver">Volver</button>
        </div>
    </div>

    <div class="content-aulas">
        <div class="no-hay"><h3>NO HAY AULAS</h3></div>
    </div>
    <div class="aulas">
        <div class="aula">
            <h5>Aula A</h5>
        </div>
        <div class="aula">
            <h5>Aula B</h5>
        </div>
        <div class="aula">
            <h5>Aula C</h5>
        </div>
        <div class="aula">
            <h5>Aula D</h5>
        </div>
        <div class="aula">
            <h5>Aula A</h5>
        </div>
        <div class="aula">
            <h5>Aula B</h5>
        </div>
        <div class="aula">
            <h5>Aula C</h5>
        </div>
        <div class="aula">
            <h5>Aula D</h5>
        </div>
    </div>
</div>

<script href="{{ asset('js/mainUser.js')}}"></script>
@endsection
