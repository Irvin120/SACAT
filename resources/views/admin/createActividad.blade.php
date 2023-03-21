@extends('archivoBaseAdmin.baseAdmin')

@section('content')
<link rel="stylesheet" href="{{ asset ('css/admin/createActividad.css')}}">

<div class="content mainConten row align-content-center">

    <div class="nombreUser col-6">
        <h2  class="text-start text-white">Bienvenidao @user123</h2>
    </div>

    <div class="fechaUser col-6 text-right">
        <h2  class="text-end">Fecha: 01/03/2023</h2>
    </div>
</div>

@endsection
 