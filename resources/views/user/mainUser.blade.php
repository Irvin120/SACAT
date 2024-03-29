@extends('archivoBaseUser.baseUser')

@section('title', 'Main-User')

@section('nombreUsuario')
    {{ $nombreUsuario }}
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/user/mainUser.css') }}">

    <div class="content">

        <div class="barinfo">

            <div class="contenAuBu">
                <div class="contentittleAulas">
                    <h2 class="titilo-text-start f">Aulas Disponibles</h2>
                    <div class=" content-aula" >
                        <div class="tittleAulas">

                            {{-- -------------------------------------------Aulas permitidas en las tarjetas----------------------- --}}
                            <div class="aulas">

                                @foreach ($aulasPermitidas as $aulaPermitida)
                                    <div class="aula" data-id-usuario="{{ $idUsuario }}"
                                        data-id="{{ $aulaPermitida->idAula }}"
                                        data-correo-usuario-encryp="{{ $correoUsuarioEncryp }}"
                                        ondblclick="entradaAreaUser(event, $(this).data('id-usuario'), $(this).data('correo-usuario-encryp'))">
                                        <img src="{{ asset ('img/aula.png' )}}" alt="" style="width: 10vh; height: 10vh; margin: 3vh;" >
                                        <h5 style="font-size: 3vh">{{ $aulaPermitida->nombreAula }}</h5>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ---------------------------------------------- Buscador------------------------------------- --}}
                <div class="search" id="ctn-bars-search">

                    <div class="container-search d-flex flex-column align-items-stretch" style="width: 100%;">
                        <form class="search-form "
                            action="{{ route('mainUser', ['idUsuario' => $idUsuario, 'correoUsuario' => encrypt($correoUsuario)]) }}"
                            method="GET">
                            @csrf
                            <div class="sectionSearch">
                                <input class="searchinput" type="text" name="query" placeholder="Buscar aula">

                                <button type="submit" style="float:right" class="bthSearch btn btn-primary">Buscar</button>
                            </div>
                        </form>

                        <div class="list-group list-group-flush border-bottom scrollarea">
                            @foreach ($aulas as $item)
                                <div class=" mb-3 d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">{{ $item->nombreAula }}</strong>
                                    <form action="{{ route('enviarSolicitud') }}" method="POST">
                                        @csrf
                                        @csrf
                                        <input type="hidden" name="idUsuario" value="{{ $idUsuario }}">
                                        <input type="hidden" name="idAula" value="{{ $item->idAula }}">
                                        <button id="enviar-solicitud" onclick="return enviarSolicitud()" type="submit"
                                            class="btn btn-primary"> Enviar Solicitud</button>
                                    </form>

                                </div>
                            @endforeach
                        </div>
                        <!--paginador-->
                        <div class="pagination justify-content-center">
                            <ul class="pagination" style="margin: 0">
                                <li class="page-item {{ $aulas->previousPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $aulas->previousPageUrl() }}" tabindex="-1">Anterior</a>
                                </li>
                                @foreach ($aulas->getUrlRange(1, $aulas->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $aulas->currentPage() ? 'active' : '' }}"><a
                                            class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endforeach
                                <li class="page-item {{ $aulas->nextPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $aulas->nextPageUrl() }}">Siguiente</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

                {{-- -------------------------------------------------Alerta verificacion de envio---------------- --}}
                <!--div id="ventana-emergente">
                    <h2>Enviar solicitud a aula</h2>
                    <p>Expresión Original y Escrita</p>
                    <div class="input-container">
                        <input type="text" class="ingreso-id" placeholder="Ingrese ID">
                    </div>
                    <div class="botones-container">
                        <button id="boton-cancelar">Cancelar</button>
                        <button id="boton-enviar">Enviar</button>
                    </div>
                </div-->
            </div>



        </div>

        <!--{{-- -------------------------------------------------Alerta verificacion de envio---------------- --}}
        <div id="ventana-emergente-confirmacion">
            <h2>Enviar solicitud a aula</h2>
            <p>Se ha enciado tu solicitud a <br><span>"Expresión Original y Escrita"</span></p>
            <div class="botones-container">
                <button id="boton-volver">Volver</button>
            </div>
        </div>
        -->

    </div>


@endsection
