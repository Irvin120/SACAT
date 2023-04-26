@extends('archivoBaseUser.baseUser')

@section('title', 'Main-User')


@section('content')

    <link rel="stylesheet" href="{{ asset('css/user/mainUser.css') }}">

    <div class="content">
        <div class="barinfo">

            <div class="content-search">
                <div class="tittleAulas">
                    <h2 class="text-start f">Aulas Disponibles</h2>
                </div>
                <div class="search" id="ctn-bars-search">

                    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" style="width: 380px;">
                        <form action="{{ route('searchAula') }}" method="GET">
                            @csrf
                            <div class="sectionSearch">
                                <input class="searchinput" type="text" name="query" placeholder="Buscar aula">
                                <button type="submit" style="float:right" class="bthSearch btn btn-primary">Button</button>
                            </div>
                        </form>

                        <div class="list-group list-group-flush border-bottom scrollarea">
                            @foreach ($aulas as $item)

                            <div class=" mb-3 d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">{{ $item->nombreAula }}</strong>
                                <button class="btn btn-primary"> Enviar Solicitud</button>
                            </div>

                            @endforeach
                        </div>
                    </div>


                </div>
            </div>

            <div id="ventana-emergente">
                <h2>Enviar solicitud a aula</h2>
                <p>Expresión Original y Escrita</p>
                <div class="input-container">
                    <input type="text" class="ingreso-id" placeholder="Ingrese ID">
                </div>
                <div class="botones-container">
                    <button id="boton-cancelar">Cancelar</button>
                    <button id="boton-enviar">Enviar</button>
                </div>
            </div>
        </div>


        <div id="ventana-emergente-confirmacion">
            <h2>Enviar solicitud a aula</h2>
            <p>Se ha enciado tu solicitud a <br><span>"Expresión Original y Escrita"</span></p>
            <div class="botones-container">
                <button id="boton-volver">Volver</button>
            </div>
        </div>


        <div class="content-aulas">
            <div class="no-hay">
                <h3>NO HAY AULAS</h3>
            </div>
        </div>


        <div class="aulas">
            <div class="aula">
                <h5>Aula A</h5>
            </div>
            <div class="aula">
                <h5>Aula B</h5>
            </div>
            <div class="aula">
                <h5>Aula C</h5>
            </div>
            <div class="aula">
                <h5>Aula D</h5>
            </div>
            <div class="aula">
                <h5>Aula A</h5>
            </div>
            <div class="aula">
                <h5>Aula B</h5>
            </div>
            <div class="aula">
                <h5>Aula C</h5>
            </div>
            <div class="aula">
                <h5>Aula D</h5>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/mainUser.js') }}"></script>
@endsection


