@extends('archivoBaseUser.baseUser')

@section('title', 'Actividades-User')

@section('nombreUsuario')
    {{ $user->nombreUsuario }}
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/actividadesUser.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- -------------------------------------------------Contenedor de tarjetas------------------- --}}

    <!-- contenedor general -->
    <div class="content">

        <!-- contenedor de lista de actividades -->

        <div class="content-info">

            <div class="content-activades">
                @if (isset($mensaje))
                    <div class="alert alert-info">{{ $mensaje }}</div>
                @endif
                @foreach ($actividades as $actividad)
                    <div class="actividades" data-id-actividad="{{ $actividad->idActividad }}"
                        data-nombre-actividad="{{ $actividad->nombreActividad }}" data-id-usuario="{{ $user->idUsuario }}"
                        data-correo-usuario-encryp="{{ $correoUsuarioEncryp }}"
                        onclick="entradaActividadUser(event, $(this).data('id-actividad'), $(this).data('nombre-actividad'), $(this).data('id-usuario'), $(this).data('correo-usuario-encryp'))">

                        <!-- actividad -->
                        <button class="actividad">
                            <i class="icon-activid fa-solid fa-note-sticky fa-xl" style="color: #fff;"></i>
                            <span class="name-activid">Actividades: {{ $actividad->nombreActividad }}</span>
                        </button>

                    </div>
                @endforeach
            </div>

            <!-- boton de regreso -->
            <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-4">
                <button id="boton-volver" onclick="history.back()" class="btn-volver btn btn-primary"
                    type="button">VOLVER</button>
            </div>

        </div>
    </div>

@endsection
