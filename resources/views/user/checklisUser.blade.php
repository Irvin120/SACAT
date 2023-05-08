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


                <div id="error-message" style="display:none">{{ session('error') }}</div>


                <form method="post" action="{{ route('registrarActividad') }}">
                    @csrf



                    <input type="hidden" name="idActividad" value="{{ $actividad->idActividad }}">
                    <input type="hidden" name="idUsuario" value="{{ $usuario->idUsuario }}">


                    @foreach ($dias as $dia)
                        <form method="post" action="{{ route('registrarActividad') }}">
                            @csrf
                            <input type="hidden" name="idActividad" value="{{ $actividad->idActividad }}">
                            <input type="hidden" name="idUsuario" value="{{ $usuario->idUsuario }}">



                            <div class="form-check">
                                @if (!$registrosUsuario->contains('fechaRegistroActividad', $dia))
                                    <input class="form-check-input resumen-checkbox" type="checkbox" required name="dias[]"
                                        value="{{ $dia }}" id="{{ $dia }}">
                                @endif

                                <label class="form-check-label" for="{{ $dia }}">
                                    {{ date('d/m/Y', strtotime($dia)) }} -
                                    {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}
                                </label>
                                @if ($registrosUsuario->contains('fechaRegistroActividad', $dia))
                                    <input type="hidden" name="resumenes[{{ $dia }}]"
                                        value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumenRegistroActividad }}">
                                    <input type="text"
                                        value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumenRegistroActividad }}"readonly>
                                @else
                                    <input type="text" name="resumenes[{{ $dia }}]"
                                        placeholder="Resumen del día" class="resumen-input">
                                @endif
                            </div>


                            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                        </form>
                    @endforeach


                </form>


            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            // Selecciona todos los checkboxes que tienen la clase 'resumen-checkbox'
            $('.resumen-checkbox').change(function() {
                // Obtiene el input de resumen correspondiente
                var input = $(this).parent().find('.resumen-input');
                if (this.checked) {
                    input.attr('required', true);
                } else {
                    input.removeAttr('required');
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('.resumen-input').forEach(function(input) {
            input.addEventListener('input', function() {
                var checkbox = this.closest('.form-check').querySelector('.form-check-input');
                if (this.value.trim() !== '') {
                    checkbox.checked = true;
                }
            });
        });
    </script>

<script>
    // Espera a que se cargue completamente la página
    window.onload = function() {
        // Obtiene el elemento que contiene el mensaje de error
        var errorDiv = document.getElementById('error-message');

        // Si el mensaje de error existe
        if (errorDiv) {
            // Muestra el mensaje de error
            errorDiv.style.display = 'block';
            // Espera 2 segundos
            setTimeout(function() {
                // Oculta el mensaje de error
                errorDiv.style.display = 'none';
            }, 2000); // 2000 milisegundos = 2 segundos
        }
    }
</script>





@endsection
