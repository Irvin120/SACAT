@extends('archivoBaseUser.baseUser')

@section('title', 'Actividades-User')

@section('nombreUsuario')
    {{ $user->nombreUsuario }}
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/actividadesUser.css') }}">


    {{-- -------------------------------------------------Contenedor de tarjetas------------------- --}}
    <div class="content">
        <div class="content-activades">
            @foreach ($actividades as $actividad)
                <div class="actividades"
                    data-id-usuario="{{ $user->idUsuario }}"
                    ondblclick="entradaActividadUser(event, $(this).data('id-usuario'))" >
                    <div><i
                            class="fa-solid fa-magnifying-glass"></i><span>Actividades:{{ $actividad->nombreActividad }}</span>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="botones-container">
            <button id="boton-volver">Volver</button>
        </div>
    </div>

@endsection
