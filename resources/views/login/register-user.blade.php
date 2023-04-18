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

    <form>


      <div class="mb-0 col-sm-0" id="form_login" >

        <div class="" id="conten_img">
          <i id="img_perfil" class="fa-solid fa-circle-user fa-8x"></i>
        </div>       

        <div class="col-sm-0" id="conten_form">
          <!-- nombre -->
          <div class="mb-2 row">
            <label for="validationDefault01" class="col-sm-5 form-label">NOMBRE</label>
            <div class="col-sm-7 entradas" >
              <input type="text" class="form-control" id="validationDefault01 inputName" value="" required>
            </div>
          </div>

          <!-- apellidos -->
          <div class="mb-2 row">
            <label for="validationDefault01" class="col-sm-5 form-label">APELLIDO</label>
            <div class="col-sm-7 entradas" >
              <input type="text" class="form-control" id="validationDefault01 inputLastName" value="" required>
            </div>
          </div>

          <!-- matricula -->
          <div class="mb-2 row">
            <label for="validationDefault01" class="col-sm-5 form-label">MATRICULA</label>
            <div class="col-sm-7 entradas" >
              <input type="number" class="form-control" id="validationDefault01 inputMatric" value="" required>
            </div>
          </div>

          <!-- correo electronico -->
          <div class="mb-2 row">
            <label for="validationDefault01" class="col-sm-5 form-label">USUARIO</label>
            <div class="col-sm-7 entradas" >
              <input type="email" class="form-control" id="validationDefault01 inputUser" value="" required>
            </div>
          </div>

          <!-- contraseña -->
          <div class="mb-2  row">
            <label for="validationDefaultPassword" class="col-sm-5 form-label">CONTRASEÑA</label>
            <div class="col-sm-7  entradas">
              <input type="password" class="form-control" id="validationDefaultPassword" value="" required>         
            </div>
          </div>

          <!-- confirmar contraseña -->
          <div class="mb-2  row">
            <label for="validationDefaultPassword" class="col-sm-5 form-label">CONFIRMAR CONTRASEÑA</label>
            <div class="col-sm-7  entradas">
              <input type="password" class="form-control" id="validationDefaultPassword" value="" required>         
            </div>
          </div>

          
          <!-- botones aceptar y cancelar -->
          <div class="ms-0 contenedor_ops">
            <button class="btn btn-primary col-sm-4 ms-3 mb-1" type="submit">Aceptar</button>
            <button class="btn btn-primary col-sm-4 ms-3 mb-1" type="submit">Cancelar</button>
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