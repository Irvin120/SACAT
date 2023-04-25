<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/stylesave.css')}}"">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>

    <title>Registro completado</title>

  </head> 
  <body>

    <form>

      <div class="mb-0 col-sm-0" id="form_login" >

        <div class="" id="conten_img">
          <i id="img_perfil" class="fa-solid fa-circle-user fa-8x"></i>
        </div>       

        <div class="col-sm-0" id="conten_form">

            <p>REGISTRO TERMINADO</p>
            <p>Se ha completado su registro, vuelva para iniciar sesión </p>
 
          <!-- boton aceptar -->
          <div class="ms-0 contenedor_ops">
            <a href="{{ route('login-user')}}"  class="btn btn-primary col-sm-8 ms-5 mb-0" type="submit">Aceptar</a>
          </div>
        
        </div>

      </div>

    </form>
