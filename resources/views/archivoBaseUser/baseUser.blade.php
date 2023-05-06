<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/mainUser.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/baseUser.css') }}">

</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none mx-5">
                <span class="fs-1 mx-2"> <strong> SACAT</strong></span>
            </a>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-circle-user fa-3x"></i>
                </button>
                    <ul class="dropdown-menu ul-lg">
                    
                        <form action="{{ route('logout-user') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btnAdmin btn" onclick="return confirmLogout()" title="Cerrar Sesion">
                                    <i class="iconAdmin fa-solid fa-right-from-bracket fa-lg" style="color: #000000;"></i> Cerrar Sesion
                            </button>
                        </form> 
                    
                        <button type="submit" class="btnAdmin btn" onclick="window.location.href='/cambiar-password-user'" title="Cambiar Contraseña">
                        <i class="iconAdmin fa-solid fa-lock fa-lg" style="color: #000000;"></i> Cambiar Contra
                        </button>
                        

                        <button type="submit" class="btnAdmin btn" onclick="window.location.href='/cambiar-correo-user'" title="Cambiar Correo">
                        <i class="iconAdmin fa-solid fa-at fa-lg" style="color: #000000;"></i> Cambiar Correo
                        </button>

                        <!-- boton de cambiar nombre de usuario -->
                        <button type="submit" class="btnAdmin btn" onclick="window.location.href='/cambiar-nombre-user'" title="Cambiar Nombre">
                            <i class="iconAdmin fa-solid fa-signature fa-lg" style="color: #000000;"></i> Cambiar Name
                        </button>
                        
                    </ul>
            </div>




        </header>
        <div class="content-user ">
            <div class="nombreUser">
                <h2 class="text-start text-white">Bienvenido @yield('nombreUsuario')</h2>

            </div>
            <div class="fechaUser">
                <h2 class="text-end">Fecha: {{ date('d/m/Y') }}</h2>
            </div>
        </div>
    </div>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
