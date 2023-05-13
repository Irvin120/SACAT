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

    <!-- conten principal con 3 botones -->
    <div class="options-actvs">

        <!-- contenedor Agregar y ver actividades -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">

                <!-- Boton para desplasar y ver actividades -->
                <div class="contendbutton accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p class="name-btn-rev">Agregar actividades</p>
                        <!-- icon -->
                        <i class="icon-boton icon fa-solid fa-calendar-plus fa-xl" style="color: #000000;"></i>
                    </button>
                </div>


                <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
                    <div class="listActivity accordion-body">
                        @foreach ($actividades as $actividad)

                            <!-- contenedor por actividad -->
                            <div class="activity">

                                <!-- nombre de la actividad -->
                                <p class="nameActivity">{{ $actividad->nombreActividad }}</p>

                                <!-- boton de borrar actividad -->
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

                        <!-- Ventana Modal - Formulario de crear actividad -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                            onsubmit="return validarFormularioActividad()">
                            <form action="{{ route('nuevaActividad') }}" method="POST">
                                @csrf
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <!-- contenedor ventana -->
                                    <div class="modal-content">

                                        <!-- encabezado -->
                                        <div class="modal-header">
                                            <!-- titulo -->
                                            <h1 class="modal-title fs-5 TitleModal" id="staticBackdropLabel">
                                                Agregar actividad
                                            </h1>
                                            <!-- boton de cerrar ventana -->
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <!-- contenedor de formulario -->
                                        <div class="conten-modal modal-body">

                                            <!-- formulario inputs -->
                                            <div class="card-instruc card">
                                                <!-- id aula -->
                                                <div class="cardDesc card-body">
                                                    <input readonly class="form-control" id="idActividad"
                                                        placeholder="ID Aula" name="idAula" value="{{ $aula->idAula }}">
                                                </div>
                                                <!-- nombre del la actividad -->
                                                <div class="cardDesc card-body">
                                                    <input class="form-control" id="nombreActividad" placeholder="Nombre"
                                                        name="nombreActividad">
                                                </div>
                                                <!-- descripcion de la actividad -->
                                                <div class="cardDesc card-body">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de la actividad"
                                                        name="resumen"></textarea>
                                                </div>
                                            </div>

                                            <!-- fechas -->
                                            <div class="fecha">
                                                <!-- subtitulo -->
                                                <h5>Establecer fecha de la semana</h5>
                                                <!-- input fechas de unicio -->
                                                <div class="date-if">
                                                    <p class="nameDate">Fecha inicio</p>
                                                    <input class="nameDate" type="date" name="fechaInicio" id="fechaI">
                                                </div>
                                                <!-- input fecha de finalizacion -->
                                                <div class="date-if">
                                                    <p class="nameDate">Fecha Final</p>
                                                    <input class="nameDate" type="date" name="fechaFin" id="fechaF">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- FIN contenedor de formulario -->

                                        <!-- Botones de opcion -->
                                        <div class="modal-footer">
                                            <!-- boton de cancelar -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <!-- boton de aceptar -->
                                            <button type="submit" class="btn btn-primary">Publicar</button>
                                        </div>

                                    </div>
                                    <!-- FIN contenedor ventana -->

                                </div>
                            </form>

                        </div>
                        <!-- FIN ventana Modal - Formulario de crear actividad -->

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
                <p class="name-btn-rev">Revisar actividades</p>
                <i class="icon-boton icon fa-solid fa-calendar-plus fa-xl" style="color: #000000;"></i>
            </button>
        </div>

        <!-- ventana revisar actividad -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <!-- contenedor de ventana -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- encabezado de ventana -->
                    <div class="modal-header">
                        <!-- titulo -->
                        <h1 class="modal-title fs-5 TitleModal" id="exampleModalLabel">Revisar actividades</h1>
                        <!-- boton cerrar ventana -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- body de ventana -->
                    <div class="modal-body">

                        <!-- contendor de lista de actividades -->
                        <div class="div-actividades">

                            <!-- vista de Lista de actividades  -->
                            <div id="lista-actividades" class="contenedor-actividades activo">
                                <!-- titulo -->
                                <h3 class="text-center">Lista de actividades</h3>
                                
                                <!-- Actividad -->
                                @foreach ($actividades as $actividad)
                                    <form action="{{ route('revisionActividad', $actividad->idActividad) }}">
                                        <div class="actividaxRevisar">
                                            <i class="iconActividaxRevisar fa-solid fa-calendar fa-2xl"
                                                style="color: #000000;"></i>
                                            <button id="button-revisar" class="btnActividadxRevisar btn text-start">
                                                {{ $actividad->nombreActividad }} </button>
                                        </div>
                                    </form>
                                @endforeach
                            </div>

                        </div>
                        <!-- FIN contendor de lista de actividades -->

                    </div>
                    <!-- FIN body de ventana -->

                </div>
            </div>
            <!-- contenedor de ventana -->

        </div>
        <!-- FIN Revisar actividades -->



        <!-- INICIO Ver y aceptar solicitudes -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">

                <!-- boton para ver solicitudes -->
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <p class="name-btn-rev">solicitudes de acceso</p> 
                        <i class="icon-boton icon fa-solid fa-user-plus fa-xl" style="color: #000000;"></i>
                    </button>
                </div>

                <!-- solicitudes -->
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <!-- body -->
                    <div class="accordion-body">
                        <!-- contenedor de solicitudes -->
                        <div class="ContendSolicitudes">
                            @foreach ($solicitudes as $solicitud)

                                <!-- solicitud de el usuario -->
                                <div class="SolicitudUser">
                                    <!-- nombre de usuario -->
                                    <p class="NameUser">{{ $solicitud->usuario->nombreUsuario }} </p>

                                    <!-- boton de acepartar solicitud -->
                                    <form action="{{ route('aceptarSolicitud', $solicitud->idSolicitud) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" onclick="return aceptarSolicitudUsuario()"
                                            class="btn-slt btnchek btn">
                                            <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                                        </button>
                                    </form>

                                    <!-- boton de eliminar solicitud -->
                                    <form action="{{ route('eliminarSolicitud', $solicitud->idSolicitud) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return eliminarSolicitudUsuario() "
                                            class="btn-slt btnx btn">
                                            <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                                        </button>
                                    </form>

                                </div>
                                <!--FIN solicitude de el usuario -->
                            @endforeach
                        </div>
                        <!-- contenedor de solicitudes -->

                    </div>
                    <!-- FIN body -->

                </div>
                <!-- FIN solicitudes -->

            </div>
        </div>
        <!-- FIN Ver y aceptar solicitudes -->

    </div>
    <!-- FIN conten principal con 3 botones -->

    <!-- Scripts jS -->
    <script src="{{ asset('js/revisar-actividades.js') }}"></script>
@endsection
