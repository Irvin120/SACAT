@extends('archivoBaseUser.baseUser')

@section('title', 'Actividades-User')

@section('nombreUsuario')
    {{ $user->nombreUsuario }}
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/actividadesUser.css') }}">

    <div class="content">
        <div class="content-activades">
            @foreach ($actividades as $actividad)
                <div class="actividades">
                    <a href=""><i class="fa-solid fa-magnifying-glass"></i><span>Actividades:{{ $actividad->nombreActividad }}</span></a>
                </div>
            @endforeach


        </div>
        <div class="botones-container">
            <button id="boton-volver">Volver</button>
        </div>
    </div>
@endsection
