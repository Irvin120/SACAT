@extends('archivoBaseAdmin.baseAdmin')

@section('title', 'Main-Admin')


@section('alerta')

    <div class="containerForm" id="containerForm" style="display:none;">

        <div class="div-title">
            <h2 class="text-center ">
                Nueva Aula
            </h2>
        </div>
        <!--Formulario para crear una nueva aula-->
        <form id="formularioAdd" method="POST" action="{{ route('createAula') }}" onsubmit="return validarFormularioCrearAula()">
            @csrf
            <div class="containerInput p-3">

                <div class="input-group input-group-sm mb-3 my-4">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre del Aula</span>
                    <input id="nombreAula" name="nombreAula" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" maxlength="50" placeholder="Laboratorio de Informática 1">
                </div>

                <div class="input-group input-group-sm mb-3 my-4">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Asignatura</span>
                    <input id="asignatura" name="asignatura" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" maxlength="50" placeholder="Nombre de la materia">
                </div>

                <div class="input-group input-group-sm mb-3 my-4">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Grupo</span>
                    <input id="grupo" name="grupo" type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" maxlength="10" placeholder="1A-DGS">
                </div>

                <div class="contenButtonss d-grid gap-2 d-md-flex justify-content-md-center my-4">
                    <button type="submit" class="btn btn-secondary btn-sm mx-4 text-black">Aceptar</button>
                    <button type="button" class="btn btn-secondary btn-sm mx-4 text-black"
                        onclick="cancelarFormulario(); cambiarBoton(addButton)">Cancelar</button>
                </div>

            </div>
        </form>



    </div>
@endsection


@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/mainAdmin.css') }}">
    <div class="containerTarjetas ">

        @foreach ($datos as $aula)
            <div class="tarjeta d-flex align-items-center justify-content-center" data-id="{{ $aula->idAula }}"
                ondblclick="entradaArea(event)">

                {{-- Botones de borrado de targeta --}}
                <div id="botones" style="display:none;">
                    <form action="{{ route('destroyAula', $aula->idAula) }}" method="POST"  onsubmit="return confirm('¿Está seguro que desea eliminar {{ $aula->nombreAula }}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="btn btnConten bg-white rounded-circle  d-flex align-items-center justify-content-center ">
                            <i class="fa-sharp fa-solid fa-x  d-flex align-items-center justify-content-center"></i>
                        </button>
                    </form>
                </div>
                <!--Formulario para editar el-->
                <form id="EditNombreAula" action="{{ route('updateAula', $aula->idAula) }}" method="POST">
                    @csrf
                    @method('PUT') <strong> <input class="text-center" type="text" name="nombreAula"
                            value="{{ $aula->nombreAula }}" onchange="if(window.confirm('¿Está seguro de que desea cambiar el nombre del aula {{ $aula->nombreAula }} y guardar los cambios?')){this.form.submit();}else{this.value='{{ $aula->nombreAula }}';}"></strong>
                    <i class="fa-solid fa-pencil icon-header"></i>
                    <br>
                    <br>

                    <div class="contenBotones" style="display:none">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>

            </div>
        @endforeach



    </div>
@endsection
