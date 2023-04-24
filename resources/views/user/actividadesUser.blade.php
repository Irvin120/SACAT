@extends('archivoBaseUser.baseUser')

@section('title', 'Actividades-User')


@section('content')
<link rel="stylesheet" href="{{ asset('css/user/actividadesUser.css')}}">

<div class="content">
    <div class="content-activades">
        <div class="actividades">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i><span>Actividades: Semana 1</span></a>
        </div>
        <div class="actividades">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i><span>Actividades: Semana 2</span></a>
        </div>
        <div class="actividades">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i><span>Actividades: Semana 3</span></a>
        </div>
        <div class="actividades">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i><span>Actividades: Semana 4</span></a>
        </div>
    </div>
    <div class="botones-container">
        <button id="boton-volver">Volver</button>
    </div>
</div>
@endsection