<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login-admin</title>
    
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/stylelogin-admin.css') }}">
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <!-- bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
  <body>

    <div class="content">

        <div class="coten-login">
            <div class="circulo-icon">
                <div class="circulo">
                    <i class="icon-login fa-solid fa-user fa-6x" style="color: #282828;"></i>
                </div>
            </div>
            
            <p class="text-p" >Iniciar sesion</p>


            <form method="POST" action="{{ route('loginPost') }}" class="g-3 needs-validation" novalidate>
                @csrf
                    <div id="form_login">

                        <!-- correo electronico -->
                        <div class="">
                            <label for="validationCustom01" class="form-label"></label>
                            
                            <div class="contend-input">
                                <i class="icon-input fa-solid fa-envelope fa-xl" style="color: #000000;"></i>
                                <input type="email" class="input-login form-control" id="validationCustom01" 
                                name="correoAdmin" placeholder="email" required>
                            </div>
                            
                            @error('correoAdmin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <div class="invalid-feedback">
                                Por favor introduce tu correo
                            </div>
                        </div>

                        <!-- contraseña -->
                        <div class="">
                            <label for="validationCustom02" class="form-label"></label>
                        
                            <div class="contend-input">
                                <i class="icon-input fa-solid fa-lock fa-xl" style="color: #000000;"></i>
                                <input type="password" class="input-login form-control" id="validationCustom02" 
                                name="contraseñaAdmin" placeholder="contraseña" required>
                            </div>

                            @error('contraseñaAdmin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="invalid-feedback">
                                Por favor introduce tu contraseña
                            </div>
                        </div>

                        <!-- recuperar contraseña -->
                        <div>
                        <p class="text-p mt-3"><a href="#" class="link-underline-light">¿Has olvidado tu contraseña?</a></p>
                        </div>

                        <!-- boton de acceder -->
                        <div class="d-grid gap-2 col-7 mt-4 mx-auto">
                        <button class="btn-acced btn btn-primary" type="submit">ACCEDER</button>
                        </div>

                        <!-- boton de regitro -->
                        <div class="d-grid gap-2 col-7 mt-4 mb-5 mx-auto">
                        <button class="btn-register btn btn-primary" type="button">REGISTRARME</button>
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
            
        </div>

    </div>
    
    <!-- php artisan serve --host=0.0.0.0 -->

    <!-- git add .
    git commit -m "name"
    git push -->

    

    <script src="{{ asset('js/validacion.js') }}"></script>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>



<!-- php artisan serve --host=0.0.0.0 -->

<!-- git add .
        git commit -m "name"
        git push -->
