@extends('archivoBaseAdmin.baseAdmin')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/admin/createActividad.css') }}">

    <div class="content mainConten row align-content-center">

        <div class="nombreUser col-6">
            <h2 class="text-start text-white">Bienvenidao @user123</h2>
        </div>

        <div class="fechaUser col-6 text-right">
            <h2 class="text-end">Fecha: 01/03/2023</h2>
        </div>
    </div>

    <div class="row bar-menu">
        <div class="col-sm-4 col-bar-menu d-flex align-items-center justify-content-center">
            <h6 class="text-col ">Agregar Actividades</h6>
        </div>
        <div class="col-sm-4 col-bar-menu d-flex align-items-center justify-content-center">
            <h6 class="text-col">Revisar Actividades</h6>
        </div>
        <div class="col-sm-4 col-bar-menu d-flex align-items-center justify-content-center">
            <h6 class="text-col">Solicitudes de Acceso a Aulas</h6>
        </div>
    </div>
@endsection
