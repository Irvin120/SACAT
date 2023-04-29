<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Base</title>

    <!-- estilos css -->
    <link rel="stylesheet" href="{{ asset('css/admin-base.css') }}">
    <!-- javascript -->
    <script src="{{ asset('js/baseAdmin.js') }}"></script>
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <!-- bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>


    <!-- encabezado -->
    <div class="contend-encabezado">
        <!-- logo -->
        <div class="contend-logo">
          <img class="logo" src="{{ asset('img/logo.png')}}" alt="">
        </div>
        <!-- informacion -->
        <div class="informacion">
            <p class="mi-info">MI INFORMACION</p>
        </div>
        <!-- nombre del usuario -->
        <div class="info-perfil">
            <img class="img-perfil" src="{{ asset('img/foto-usuario.png')}}" alt="">
            <p class="name-user">Nombre del usuario</p>
        </div>
    </div>

    <!-- menu vertical -->
    <div class="wrapper">
      <div class="menu">

        <ul>
        <!-- boton home -->
        <button class="home-button">
          <img class="img-home" src="{{ asset('img/home.png')}}" alt="home">
          <p class="format-p">HOME</p>
        </button>
        <!-- boton de mi cuenta -->
        <button class="home-account">
          <img class="img-account" src="{{ asset('img/account.png')}}" alt="account">
          <p class="format-p">CUENTA</p>
        </button>
        <!-- boton de cerrar sesion -->
        <button class="logout-button">
          <img class="img-logout" src="{{ asset('img/logout.png')}}" alt="logout">
          <P class="format-p">SALIR</P>
        </button>
        </ul>

      </div>

      <!-- contenedor para el contenido -->
      <div class="content">
        







      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>