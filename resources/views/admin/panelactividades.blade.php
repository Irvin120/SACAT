@extends('archivoBaseAdmin.baseAdmin')

@section('botones')
    <li class="nav-item mx-3 d-flex justify-content-center align-items-center">
        <a href="#" onclick="window.history.back();" class="text-white text-decoration-none">Volver</a>
    </li>
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/panelActividades.css') }}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>

    <!-- info de aula -->
    <div class="info-aula ">
        <div class="name-aula">
            <p>{{ $aula->nombreAula }}</p>
        </div>
        <div class="id-aula">
            <p>ID aula:{{ $aula->idAula }}</p>
        </div>
    </div>


    <div class="options-actvs">

        <!-- INICIO Agregar y ver actividades -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">

                <div class="contendbutton accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                        Agregar actividades
                        <i class="icon fa-solid fa-calendar-plus fa-xl" style="color: #000000;"></i>

                    </button>
                </div>

                <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
                    <div class="listActivity accordion-body">
                        @foreach ($actividades as $actividad)
                            <div class="activity">
                                <p class="nameActivity">{{ $actividad->nombreActividad }}</p>

                                <form action="{{ route('deleteActividad', $actividad->idActividad) }}" method="POST"">
                                    @csrf
                                    <button onclick="return confirmDelete()" id="deleteButton" type="submit"
                                        class="btnx btn">
                                        <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                                    </button>
                                </form>

                            </div>
                        @endforeach


                        <!-- Boton para abrir ventana para crear una actividad -->
                        <div class="contendButton">
                            <button type="button" class="btnCrear btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Crear
                            </button>
                        </div>

                        <!-- Ventana Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                            onsubmit="return validarFormularioActividad()">
                            <form action="{{ route('nuevaActividad') }}" method="POST">
                                @csrf
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h1 class="modal-title fs-5 TitleModal" id="staticBackdropLabel">
                                                Agregar actividad
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>

                                        <div class="conten-modal modal-body">

                                            <div class="card-instruc card">

                                                <div class="cardDesc card-body">
                                                    <input readonly class="form-control" id="idActividad"
                                                        placeholder="ID Aula" name="idAula" value="{{ $aula->idAula }}">
                                                </div>

                                                <div class="cardDesc card-body">
                                                    <input class="form-control" id="nombreActividad" placeholder="Nombre"
                                                        name="nombreActividad">
                                                </div>

                                                <div class="cardDesc card-body">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de la actividad"
                                                        name="resumen"></textarea>
                                                </div>

                                            </div>

                                            <div class="fecha">

                                                <h5>Establecer fecha de la semana</h5>
                                                <div class="date-if">
                                                    <p class="nameDate">Fecha inicio</p>
                                                    <input class="nameDate" type="date" name="fechaInicio"
                                                        id="fechaI">
                                                </div>

                                                <div class="date-if">
                                                    <p class="nameDate">Fecha Final</p>
                                                    <input class="nameDate" type="date" name="fechaFin" id="fechaF">
                                                </div>

                                            </div>

                                        </div>

                                        <!-- Botones de opcion -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Publicar</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- FIN Agregar y ver actividades -->



        <!-- INICIO Revisar actividades -->


        <!-- Button Abrir ventana de revisar actividades -->
        <div class="contendButtonRevi">

            <button type="button" class="btn btn-primary buttonActivityOptions" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Revisar activid
                <i class="icon fa-solid fa-calendar-plus fa-xl" style="color: #000000;"></i>
            </button>

        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 TitleModal" id="exampleModalLabel">Revisar actividades</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <!-- div contenedor de 3 vistas de actividades (Actualizacion mediante este contendor)  -->
                        <div class="div-actividades">

                            <!-- 1. Vista de Lista de actividades  -->
                            <div id="lista-actividades" class="contenedor-actividades activo">
                                <h3 class="text-center">Lista de actividades</h3>
                                <!-- lista de actividades -->

                                <!-- Actividad 1 -->
                                <div class="actividaxRevisar">
                                    <i class="iconActividaxRevisar fa-solid fa-calendar fa-2xl"
                                        style="color: #000000;"></i>
                                    <button id="button-revisar" class="btnActividadxRevisar btn text-start">Actividad 1 -
                                        Resumen semana 1</button>
                                </div>

                            </div>

                            <!-- 2. Vista de detalles de la actividad (Lista de alumnos y cumplimiento diario por semana) -->
                            <div id="info-actividades" class="contenedor-actividades">
                                <h3 class="titleVistas text-center">Detalles de la actividad</h3>

                                <div class="contendTableCalender">

                                    <div class="encabezadoSemana">
                                        <div class="titleSem">
                                            <p class="nameSem">semana:</p>
                                        </div>

                                        <div class="diasDeSem">
                                            <p class="diaSem">Lun</p>
                                            <p class="diaSem">Mar</p>
                                            <p class="diaSem">Mie</p>
                                            <p class="diaSem">Juv</p>
                                            <p class="diaSem">Vie</p>
                                            <p class="diaSem">Sab</p>
                                            <p class="diaSem">Dom</p>
                                        </div>
                                    </div>

                                    <div class="listAlumnos">

                                        <div class="alumnoActivSem">
                                            <div class="conteNameAlumno">
                                                <p class="nameAlumno">Juan Perez Cruz</p>
                                            </div>

                                            <div class="resultadosDia">
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                                <p class="cumplimientoDia">Si</p>
                                            </div>

                                            <div class="notaSema">
                                                <button id="button-ver-notas" class="btnVerNotas btn">Ver notas</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button id="button-volver-lista"
                                        class="btnVolver btn btn-primary activo">volver</button>
                                </div>
                            </div>

                            <!-- 3. Vista de notas de la actividad por usuario -->
                            <div id="ver-notas" class="contenedor-actividades">
                                <h3 class="titleVistas text-center">Notas de videos</h3>


                                <div class="contendTableCalender">

                                    <div class="encabezadoSemana">
                                        <div class="titleSemNotas">
                                            <p class="nameSem">semana:</p>
                                        </div>

                                        <div class="diasDeSemNotas">
                                            <p class="diaSem">Lun</p>
                                            <p class="diaSem">Mar</p>
                                            <p class="diaSem">Mie</p>
                                            <p class="diaSem">Juv</p>
                                            <p class="diaSem">Vie</p>
                                            <p class="diaSem">Sab</p>
                                            <p class="diaSem">Dom</p>
                                        </div>
                                    </div>

                                    <div class="listAlumnos">

                                        <div class="alumnoActivSem">
                                            <div class="conteNameAlumnoNotas">
                                                <p class="nameAlumno">Juan Perez Cruz</p>
                                            </div>

                                            <div class="resultadosDiaNotas">
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                                <p class="notasDia">Hoy aprendi sobre....</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>




                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button id="button-volver-info" class="btnVolver btn btn-primary">volver</button>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>








        <!-- FIN Revisar actividades -->



        <!-- INICIO Ver y aceptar solicitudes -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">

                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        solicitudes de acceso
                        <i class="icon fa-solid fa-user-plus fa-xl" style="color: #000000;"></i>
                    </button>
                </div>

                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="ContendSolicitudes">
                            @foreach ($solicitudes as $solicitud)
                                <div class="SolicitudUser">
                                    <p class="NameUser">{{ $solicitud->usuario->nombreUsuario }} </p>

                                    <form action="{{ route('aceptarSolicitud', $solicitud->idSolicitud) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="btnchek btn">
                                            <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                                        </button>
                                    </form>
                                    

                                    <button type="button" class="btnx btn" onclick="aceptarSpñ">
                                        <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                                    </button>

                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- FIN Ver y aceptar solicitudes -->

    </div>


    <!-- Scripts jS -->
    <script src="{{ asset('js/revisar-actividades.js') }}"></script>
@endsection
