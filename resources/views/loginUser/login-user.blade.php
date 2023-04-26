<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/stylelogin.css') }}">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>

    <title>Inicio de secion</title>

</head>

<body>

    <form method="POST" action="{{ route('login-inicio') }}">
        @csrf

        <div class="mb-0 col-sm-0" id="form_login">

            <div class="" id="conten_img">
                <i id="img_perfil" class="fa-solid fa-circle-user fa-8x"></i>
            </div>

            <div class="col-sm-0" id="conten_form">
                <!-- usuario -->
                <div class="mb-2 row">
                    <label for="validationDefault01" class="col-sm-5 form-label">CORREO</label>
                    <div class="col-sm-7 entradas">
                        <input type="email" class="form-control" id=" validationDefault01 inputUser"
                        name="correoUsuario" placeholder="Ingresa correo electronico" required>
                        @error('correoUsuario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- contraseña -->
                <div class="mb-2  row">
                    <label for="validationDefaultPassword" class="col-sm-5 form-label">CONTRASEÑA</label>
                    <div class="col-sm-7  entradas">
                        <input type="password" class="form-control" id="validationDefaultPassword"
                                name="contraseñaUsuario" placeholder="Ingresa contraseña" required>
                        @error('contraseñaUsuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- botones aceptar y cancelar -->
                <div class="ms-0 contenedor_ops">
                    <button class="btn btn-primary col-sm-4 ms-3 mb-1" type="submit">Aceptar</button>
                    <button class="btn btn-primary col-sm-4 ms-3 mb-1" type="reset">Cancelar</button>
                </div>
            </div>

        </div>
        @if($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    </form>

    <!-- otras opciones -->
    <div class="contenedor_ops">
        <a class="btn btn-primary col-sm-4 ms-6 mb-1 ">Olvide mi contraseña</a>
    </div>
    <div class="contenedor_ops">
        <a href="{{ route('register.create') }}" class="btn btn-primary col-sm-4 ms-6 mb-1 ">Registrarme</a>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

