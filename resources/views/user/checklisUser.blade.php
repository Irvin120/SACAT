@extends('archivoBaseUser.baseUser')

@section('title', 'Checklist-User')

@section('nombreUsuario')
    {{ $usuario->nombreUsuario }}
@endsection

@section('content')

    {{-- <link rel="stylesheet" href=" {{ asset('css/user/checklisUser.css') }}"> --}}

    <div class="content">

        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="font-weight-bold">{{ $actividad->nombreActividad }}</h2>
                <p class="mb-0">{{ Str::ucfirst($actividad->resumen) }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <h5 class="font-weight-bold">Fechas</h5>
                <p class="mb-0"><span class="font-weight-bold">Inicio:</span> {{ $actividad->fechaInicio }} <br> <span
                        class="font-weight-bold">Fin:</span> {{ $actividad->fechaFin }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <h5 class="font-weight-bold">Días</h5>
                {{-- {{ dd($dias) }} --}}


                <form method="post" action="{{ route('registrarActividad') }}">
                    @csrf
                    <input type="hidden" name="idActividad" value="{{ $actividad->idActividad }}">
                    <input type="hidden" name="idUsuario" value="{{ $usuario->idUsuario }}">
                    @foreach ($dias as $dia)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dias[]" value="{{ $dia }}"
                                id="{{ $dia }}" @if ($registrosUsuario->contains('fechaRegistroActividad', $dia)) checked @endif>
                            <label class="form-check-label" for="{{ $dia }}">
                                {{ date('d/m/Y', strtotime($dia)) }} -
                                {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}
                            </label>
                            @if ($registrosUsuario->contains('fechaRegistroActividad', $dia))
                                <input type="hidden" name="resumenes[{{ $dia }}]"
                                    value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumen }}">
                                <input type="text"
                                    value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumen }}"
                                    readonly>
                            @else
                                <input type="text" name="resumenes[{{ $dia }}]" placeholder="Resumen del día"
                                    @if (old('dias.' . $dia)) required @endif>
                            @endif
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                </form>


            </div>
        </div>

    </div>




@endsection
