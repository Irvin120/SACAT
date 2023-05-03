<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/styleregister.css')}}">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>

    <title>Registrarse</title>

  </head> 
  <body>

    <form method="POST" class="formulario" action="{{ route('register.store') }}">
    @csrf

      <div class="mb-0 col-sm-0" id="form_login" class="info">
        <!-- datos -->
        <div class="col-sm-0" id="conten_form">
          <!-- nombre -->
         <p>REGISTRO</p>
          <div class="mb-2 row">
            
            <div class="col-sm-7 entradas" >
              <img src="img/usuario.jpg">
              <input type="text" class="form-control" id="validationDefault01 inputName" placeholder="Nombrea "  name= "nombreUsuario" value="" required>
           
            </div>
          </div>

          <!-- apellidos -->
          <div class="mb-2 row">
            
            <div class="col-sm-7 entradas" >
            <img src="img/usuario.jpg">
              <input type="text" class="form-control" id="validationDefault01 inputLastName" placeholder="Apellidos" name="apellidosUsuario" value="" required>
              
            </div>
          </div>

          <!-- matricula -->
          <div class="mb-2 row">
            
            <div class="col-sm-7 entradas" >
            <img src="img/id.jpg">
              <input type="number" class="form-control" id="validationDefault01 inputMatric" placeholder="Matricula" name="matriculaUsuario" value="" required>
            </div>
            @if ($errors->has('matriculaUsuario'))
              <div class="alert alert-danger">{{ $errors->first('matriculaUsuario', ':message') }}</div>
            @endif
          </div>

          <!-- correo electronico -->
          <div class="mb-2 row">
            
            <div class="col-sm-7 entradas" >
            <img src="img/gmail.jpg">
              <input type="email" class="form-control" id="validationDefault01 inputUser" name="correoUsuario" placeholder="Email" value="" required>
            </div>
            @if ($errors->has('correoUsuario'))
              <div class="alert alert-danger">{{ $errors->first('correoUsuario', ':message') }}</div>
            @endif
          </div>

          <!-- contraseña -->
          <div class="mb-2  row">
            
            <div class="col-sm-7  entradas">
            <img src="img/contraseña.jpg">
              <input type="password" class="form-control" id="validationDefaultPassword" placeholder="Contraseña" name="contraseñaUsuario" value="" required>         
            </div>
          </div>

          <!-- confirmar contraseña -->
          <div class="mb-2  row">
            
            <div class="col-sm-7  entradas">
            <img src="img/contraseña.jpg">
              <input type="password" class="form-control" id="validationDefaultPassword " placeholder="Confirmar Contraseña" value="" required>         
            </div>
          </div>

          
          <!-- botones aceptar y cancelar -->
          <div class="ms-0 contenedor_ops">
            <button class="btn btn-primary col-sm-4 ms-3 mb-1" type="submit">Aceptar</button>
            <a href="{{ route('login-user') }}"  class="btn btn-primary col-sm-4 ms-3 mb-1">Cancelar</a>
          </div>
        </div>
      </div>

        <!-- otras opciones -->
        <!-- <div class="contenedor_ops">
          <button type="submit" class="btn btn-primary col-sm-4 ms-6 mb-1 " >Olvide mi contraseña</button>
        </div>
        <div class="contenedor_ops">
          <button type="submit" class="btn btn-primary col-sm-4 ms-6 mb-1 " >Registrame</button>
        </div>
        -->
    </form>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>