@extends('archivoBaseAdmin.baseAdmin')

<link rel="stylesheet" href="{{ asset('css/admin/revisionActividades.css') }}">

@section('botones')
    <li class="nav-item mx-3 d-flex justify-content-center align-items-center">
        <a href="#" onclick="window.history.back();" class="text-white text-decoration-none">Volver</a>
    </li>
@endsection


@section('content')

    <!-- contenedor principal -->
    <div class="contain-pr">

        <!-- titulo -->
        <div class="cont-titulo mb-3 text-center">
            <!-- text-titulo -->
            <h2 class="text-titulo">{{ $actividad->nombreActividad }}</h2>
        </div>

        <!-- contenedor tabla -->
        <div class="conten-tabla">
            <!-- tabla -->
            <table class="tabla">
                <!-- encabezado de la tabla -->
                <thead class="encabezado">
                    @foreach ($usuarios as $usuario)
                    <tr class="conten-encabezado">
                        <!-- titulo dia -->
                        <td class="nombre-usuario">{{ $usuario->nombreUsuario }}</td>
                        @foreach ($dias as $dia)
                            <!-- fecha y dia -->
                            <th class="nombre-dia">
                                <div >
                                {{ date('d/m/Y', strtotime($dia)) }} -
                                {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}
                                </div>
                                
                                <div>
                                @php
                                        $registro = $registros
                                            ->where('idUsuario', $usuario->idUsuario)
                                            ->where('fechaRegistroActividad', $dia)
                                            ->first();
                                @endphp
                                {{ $registro ? $registro->resumenRegistroActividad : '-' }}
                                </div>

                                
                            </th>
                        @endforeach
                    </tr>
                    @endforeach
                </thead>


            </table>
        </div>

    </div>
@endsection
