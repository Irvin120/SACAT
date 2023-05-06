<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/styleslogin-user.css') }}">
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <!-- bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>

    <div class="content">

        <div class="contend-queEs" id="contend-queEs">
            <div clas="info-sacat">
                <h1>¿Que es SACAT?</h1>

                <p class="parrafo1">
                SACAT es un software de gestión de actividades académicas diseñado para ayudar a estudiantes y profesores a organizar 
                y administrar actividades relacionadas con la educación. Con SACAT, los estudiantes pueden crear sus tareas de manera 
                efectiva y establecer plazos. Los profesores pueden utilizarlo para crear y asignar tareas a los estudiantes, mantener
                un seguimiento de su progreso y calificar sus tareas de manera eficiente. 
                </p>

                <p class="parrafo2">
                Además de ofrecer herramientas de análisis y generación de informes para que los profesores puedan evaluar el rendimiento 
                de los estudiantes y mejorar la eficiencia del proceso educativo. Con una interfaz intuitiva y fácil de usar, SACAT es 
                una solución integral para cualquier institución educativa que busque mejorar la gestión de sus actividades académicas.
                </p>
            </div>
        </div>

        
        <div class="coten-login">
            <div class="circulo-icon">
                <div class="circulo">
                    <i class="icon-login fa-solid fa-user fa-6x" style="color: #282828;"></i>
                </div>
            </div>
            
            <p class="text-p" >Iniciar sesion</p>


            <form class="g-3 needs-validation" novalidate method="POST" action="{{ route('login-inicio') }}">
              @csrf
            <div id="form_login">

              <!-- correo electronico -->
                <div>
                  <label for="validationCustom01" class="form-label"></label>
                  
                  <div class="contend-input entradas">
                    <i class="icon-input fa-solid fa-envelope fa-xl" style="color: #000000;"></i>
                    <input type="email" class="input-login form-control" id="validationCustom01 inputUser" 
                    name="correoUsuario" placeholder="email" required>
                  </div>

                  @error('correoUsuario')
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
                    name="contraseñaUsuario" placeholder="contraseña" required>
                  </div>
                  
                  @error('contraseñaUsuario')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                  @enderror    

                  <div class="invalid-feedback">
                    Por favor introduce tu contraseña
                  </div>

                </div>

              <!-- link de recuperar contraseña -->
                <div>
                  <p class="text-p mt-3"><a href="#" class="link-underline-light">¿Has olvidado tu contraseña?</a></p>
                </div>

              <!-- boton de acceder -->
                <div class="d-grid gap-2 col-7 mt-4 mx-auto">
                  <button class="btn-acced btn btn-primary" type="submit">ACCEDER</button>
                </div>


              <!-- boton de registrarse -->
                <div class="d-grid gap-2 col-7 mt-4 mb-5 mx-auto">
                  <button class="btn-register btn btn-primary" type="button"><a href="{{ route('register.create') }}" class="btn-regist btn btn-primary p-0">REGISTRARME</a></button>
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
