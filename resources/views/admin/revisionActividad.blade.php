@extends('archivoBaseAdmin.baseAdmin')

@section('botones')
    <li class="nav-item mx-3 d-flex justify-content-center align-items-center">
        <a href="#" onclick="window.history.back();" class="text-white text-decoration-none">Volver</a>
    </li>
@endsection


@section('content')
    <div class="container">
        <div class="mb-3 text-center">
            <h2>{{ $actividad->nombreActividad }}</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Día</th>
                    @foreach ($dias as $dia)
                        <th> {{ date('d/m/Y', strtotime($dia)) }} -
                            {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombreUsuario }}</td>
                        @foreach ($dias as $dia)
                            <td>
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
