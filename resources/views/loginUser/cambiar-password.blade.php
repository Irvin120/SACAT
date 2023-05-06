<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cambiar contraseña</title>
    
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/styles-cambios.css') }}">
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <!-- bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
  <body>

    <div class="content">

        <div class="coten-login mb-5">
            <div class="circulo-icon">
                <div class="circulo">
                    <i class="icon-login fa-solid fa-key fa-6x" style="color: #282828;"></i>
                </div>
            </div>
            
            <p class="text-p" >Cambiar contraseña</p>


            <form class="g-3 needs-validation" novalidate>

                <div class="mb-4">
                  <label for="validationCustom01" class="form-label"></label>
                  <div class="contend-input">
                    <i class="icon-input fa-solid fa-lock fa-xl" style="color: #000000;"></i>
                    <input type="password" class="input-login form-control" id="validationCustom01" placeholder="contraseña actual" required>

                  </div>
                  <div class="invalid-feedback">
                    Por favor introduce tu contraseña actual
                  </div>
                </div>

                <div class="">
                  <label for="validationCustom02" class="form-label"></label>
                  <div class="contend-input">
                    <i class="icon-input fa-solid fa-lock fa-xl" style="color: #000000;"></i>
                    <input type="password" class="input-login form-control" id="validationCustom02" placeholder="nueva contraseña" required>
                    <button type="button" class="ver-password" id="ver-password-02">
                      <i class="fas fa-eye"></i>
                    </button>
                  </div>
                  <div class="invalid-feedback">
                    Por favor introduce tu nueva contraseña
                  </div>
                </div>

                <div class="repetir-contra">
                  <label for="validationCustom03" class="form-label"></label>
                  <div class="contend-input">
                    <i class="icon-input fa-solid fa-lock fa-xl" style="color: #000000;"></i>
                    <input type="password" class="input-login form-control" id="validationCustom03" placeholder="repetir contraseña" required>
                    <button type="button" class="ver-password" id="ver-password-03">
                      <i class="fas fa-eye"></i>
                    </button>
                  </div>
                  <div class="invalid-feedback">
                    Por favor repite tu nueva contraseña
                  </div>
                </div>
                


                <div>
                  <p class="text-p mt-3"><a href="#" class="link-underline-light">¿Has olvidado tu contraseña?</a></p>
                </div>

                
                <div class="d-grid gap-2 col-7 mt-4 mx-auto">
                  <button class="btn-acced btn btn-primary" type="submit">CAMBIAR</button>
                </div>


                <div class="d-grid gap-2 col-7 mt-4 mb-4 mx-auto">
                  <button class="btn-register btn btn-primary" type="button" onclick="history.back()">VOLVER</button>
                </div>

              </form>
            
        </div>

    </div>
    
    <!-- php artisan serve --host=0.0.0.0 -->

    <!-- git add .
    git commit -m "name"
    git push -->

    

    <script src="{{ asset('js/validacion.js') }}"></script>
    <script src="{{ asset('js/ver-contra.js') }}"></script>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>