<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/baseUser.css') }}">

</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none mx-5">
              <span class="fs-1 mx-2"> <strong> SACAT</strong></span>
            </a>
            <form action="{{ route('logout-user') }}" method="POST" style="display: inline;">
              @csrf

            </form>
            <form action="{{ route('logout-user') }}" method="POST" style="display: inline;">
                @csrf
                <button style="background-color: #1B59F8;" type="submit" class="nav-link btn-unstyled ">
                  <ul class="nav nav-pills">
                    <li class="nav-item mx-3"><a href="#" class="nav-link"> <i class="fa-regular fa-circle-user icon-header fa-3x"></i> </a></li>
                  </ul>
                </button>
            </form>
          </header>
          <div class="content-user ">
            <div class="nombreUser">
                <h2 class="text-start text-white">Bienvenido @user123</h2>
            </div>
            <div class="fechaUser">
                <h2 class="text-end">Fecha: 01/03/2023</h2>
            </div>
          </div>
    </div>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
