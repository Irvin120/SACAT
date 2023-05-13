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
                    <tr class="coconten-encabezado">
                        <!-- titulo dia -->
                        <th class="titulo-dia">Día</th>
                        @foreach ($dias as $dia)
                            <!-- fecha y dia -->
                            <th class="nombre-dia"> {{ date('d/m/Y', strtotime($dia)) }} -
                                {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}
                            </th>
                        @endforeach
                    </tr>
                </thead>

                <!-- contenido de la tabla -->
                <tbody class="conten-contenido-tabla">
                    @foreach ($usuarios as $usuario)
                        <tr class="contenido-tabla">

                            <!-- nombre del usuario -->
                            <td class="nombre-usuario">{{ $usuario->nombreUsuario }}</td>
                            @foreach ($dias as $dia)
                                <!-- resumen -->
                                <td class="resumen">
                                    @php
                                        $registro = $registros
                                            ->where('idUsuario', $usuario->idUsuario)
                                            ->where('fechaRegistroActividad', $dia)
                                            ->first();
                                    @endphp
                                    {{ $registro ? $registro->resumenRegistroActividad : '-' }}
                                </td>
                            @endforeach

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
@endsection
