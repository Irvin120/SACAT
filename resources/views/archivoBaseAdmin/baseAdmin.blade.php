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
    <link rel="stylesheet" href="{{ asset('css/baseAdmin.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/baseAdmin.js') }}"></script>

</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none mx-5">
                <span class="fs-1 mx-2"> <strong> SACAT</strong></span>
            </a>

            <ul class="nav nav-pills">
                @section('botones')
                <li class="nav-item mx-3">
                    <a onclick="mostrarBotones(); cambiarBoton(this)" href="#"class="nav-link rounded" aria-current="page" id="miBoton" title="Elminar clases" >
                        <i class="fa-solid fa-trash-can icon-header"></i>
                    </a>
                </li>

                <li class="nav-item mx-3">
                    <a onclick="cambiarBoton(this); mostrarForm()" href="#" class="nav-link"
                        id="addButton" title="Crear aula "> 
                        <i class="fa-solid fa-circle-plus icon-header"></i> 
                    </a>
                </li>
                @show

                <!-- boton de perfil de usuario -->
                <li class="nav-item mx-3">
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cuenta
                            </button>
                                <ul class="dropdown-menu">
                                
                                    <button type="submit" class="btnAdmin btn" onclick="return confirmLogout()" title="Cerrar Sesion">
                                    <i class="iconAdmin fa-solid fa-right-from-bracket fa-lg" style="color: #000000;"></i> Cerrar Sesion
                                    </button>
                                
                                    <button type="submit" class="btnAdmin t btn" onclick="" title="Cambiar Contraseña">
                                    <!-- <i class="iconAdmin fa-solid fa-lock fa-lg" style="color: #000000;"></i>--> Cambiar Contraseña 
                                    </button>
                                    

                                    <button type="submit" class="btnAdmin  btn" onclick="" title="Cambiar Correo">
                                    <!-- <i class="iconAdmin fa-solid fa-at fa-lg" style="color: #000000;"></i> --> Cambiar Correo
                                    </button>
                                    
                                </ul>
                            </div>


                            <!-- <button type="submit" class="nav-link btn-unstyled text-white" onclick="return confirmLogout()" title="Cerrar Sesion ">
                            <i class="fa-regular fa-circle-user "></i> -->

                        
                    </form>
                </li>
            </ul>
        </header>
    </div>


    @yield('alerta')

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
