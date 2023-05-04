@extends('archivoBaseUser.baseUser')

@section('title', 'Actividades-User')

@section('nombreUsuario')
    {{ $user->nombreUsuario }}
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/actividadesUser.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- -------------------------------------------------Contenedor de tarjetas------------------- --}}
    <div class="content">
        <div class="content-activades">
            @foreach ($actividades as $actividad)
                <div class="actividades" data-id-actividad="{{ $actividad->idActividad }}"
                    data-nombre-actividad="{{ $actividad->nombreActividad }}"
                    data-id-usuario="{{ $user->idUsuario}}"
                    data-correo-usuario-encryp="{{ $correoUsuarioEncryp}}"
                    onclick="entradaActividadUser(event, $(this).data('id-actividad'), $(this).data('nombre-actividad'), $(this).data('id-usuario'), $(this).data('correo-usuario-encryp'))">
                    <div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Actividades: {{ $actividad->nombreActividad }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="botones-container">
            <button id="boton-volver">Volver</button>
        </div>
    </div>

@endsection
