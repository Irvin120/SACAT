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
                                    <button onclick="return confirmDelete()" id="deleteButton" type="submit" class="btnx btn">
                                        <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                                    </button>
                                </form>
                            </div>
                        @endforeach


                        <!-- Button trigger modal -->
                        <div class="contendButton">
                            <button type="button" class="btnCrear btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Crear
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" onsubmit="return validarFormularioActividad()">
                            <form action="{{ route('nuevaActividad') }}" method="POST">
                                @csrf
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 TitleModal" id="staticBackdropLabel">Agregar
                                                actividad
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


        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <div class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Revisar actividades
                        <i class="icon fa-solid fa-pen-to-square fa-xl" style="color: #000000;"></i>
                    </button>
                </div>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                        being filled with some actual content.
                    </div>                    
                </div>




                


            </div>
        </div>






 


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

                            <div class="SolicitudUser">
                                <p class="NameUser">Insano 777</p>

                                <button type="button" class="btnchek btn">
                                    <i class="fa-regular fa-square-check fa-xl" style="color: #000000;"></i>
                                </button>

                                <button type="button" class="btnx btn">
                                    <i class="fa-solid fa-circle-xmark fa-xl" style="color: #000000;"></i>
                                </button>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
