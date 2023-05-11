@extends('archivoBaseUser.baseUser')

@section('title', 'Checklist-User')

@section('nombreUsuario')
    {{ $usuario->nombreUsuario }}
@endsection

@section('content')

    <link rel="stylesheet" href=" {{ asset('css/user/checklisUser.css') }}">

    <div class="content">

        <!-- información de la actividad -->
            <div class="conten-info">
                <!-- nombre de la actividad -->
                <h2 class="titulo font-weight-bold">{{ $actividad->nombreActividad }}</h2>
                <!-- indicaciones de la actividad -->
                <p class="resumen mb-0">{{ Str::ucfirst($actividad->resumen) }}</p>
            </div>

        <!-- fecha de la actividad -->
            <div class="fecha-activ">
                <!-- titilo fecha -->
                <p class="text-f font-weight-bold mb-0">Fechas:</p>
                <!-- inicio y fin de la actividad -->
                <p class="mb-0 text-p">
                    <span class="font-weight-bold text-inicio">Inicio:</span> 
                    {{ $actividad->fechaInicio }}
                    <span class="font-weight-bold text-fin">Fin:</span> 
                    {{ $actividad->fechaFin }}
                </p>
            </div>

        <div class="conten-conten">

            <div class="conten-actions">
                <h5 class="text-dias font-weight-bold ">Días por entregar</h5>
                {{-- {{ dd($dias) }} --}}


                <div id="error-message" style="display:none">{{ session('error') }}</div>


                <form class="conten-check" method="post" action="{{ route('registrarActividad') }}">
                    @csrf

                    <!-- <input type="hidden" name="idActividad" value="{{ $actividad->idActividad }}">
                    <input type="hidden" name="idUsuario" value="{{ $usuario->idUsuario }}"> -->

                    @foreach ($dias as $dia)
                        <form class="conten-check" method="post" action="{{ route('registrarActividad') }}">
                            @csrf
                            <input type="hidden" name="idActividad" value="{{ $actividad->idActividad }}">
                            <input type="hidden" name="idUsuario" value="{{ $usuario->idUsuario }}">



                            <div class="form-check">
                                
                                <!-- fecha con nombre de dia -->
                                <label class="fecha form-check-label" for="{{ $dia }}">
                                    {{ date('d/m/Y', strtotime($dia)) }} -
                                    {{ \Carbon\Carbon::parse($dia)->locale('es')->dayName }}
                                </label>
                            </div>

                            <!-- input para anotaciones -->
                            <div class="conten-inputs">                            
                                @if ($registrosUsuario->contains('fechaRegistroActividad', $dia))
                                    <input type="hidden" name="resumenes[{{ $dia }}]" class="resumen-input"
                                        value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumenRegistroActividad }}">
                                    <!-- imput de tarea guardad -->
                                    <textarea class="resumen-input-save " readonly>{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumenRegistroActividad }}</textarea>
                                    <!-- <textarea type="text" value="{{ $registrosUsuario->where('fechaRegistroActividad', $dia)->first()->resumenRegistroActividad }}"readonly
                                    class="form-control" id="exampleFormControlTextarea1" rows="3">
                                    </textarea> -->
                                @else
                                    <!-- imput de tarea no guardad -->
                                    <textarea type="text" name="resumenes[{{ $dia }}]" placeholder="Resumen del día" class="resumen-input"
                                    class="form-control" id="exampleFormControlTextarea1 validationDefault01" required></textarea>                                
                                @endif

                                <div class="checks">

                                    @if (!$registrosUsuario->contains('fechaRegistroActividad', $dia))
                                        <!-- cuadro de checkbox     -->
                                        <input class="form-check-input resumen-checkbox" type="checkbox" required name="dias[]"
                                        value="{{ $dia }}" id="{{ $dia }}">
                                    @endif

                                    <button type="submit" class="btn-enviar btn btn-primary">Enviar</button>
                                
                                </div>
                            </div>
                        </form>
                    @endforeach


                </form>
            </div>

            <div class="contend-calender">
                <h5 class="text-calender font-weight-bold ">Calendario</h5>

                <div id="calendario" class="calendario"></div>

            </div>

        

    </div>

        <div class="d-grid gap-2 col-6 mx-auto mt-4 mb-4">
            <button id="boton-volver" onclick="history.back()" class="btn-volver btn btn-primary"
                type="button">VOLVER</button>
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

    <script src="{{ asset('js/calendario.js') }}"></script>




@endsection
