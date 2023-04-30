<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - SACAT</title>
    <!-- Estilos CSS-->
    <link rel="stylesheet" href="{{ asset('css/login/styles-login-r.css') }}">
    <!-- iconos -->
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <!-- bootstrapt -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="{{ asset('img/logo.png')}}" alt="Logo ASK INSPECTOR">
    </header>
    
    <main>
        <div class="div-container">
            <div class="container-text">
                <h2>¿Qué es SACAT?</h2>
                <p>SACAT es un software de gestión de actividades académicas diseñado para ayudar a estudiantes y profesores a organizar y administrar actividades relacionadas con la educación. 
                    Con SACAT, los estudiantes pueden crear sus tareas de manera efectiva y establecer plazos.
                    Los profesores pueden utilizarlo para crear y asignar tareas a los estudiantes, mantener un seguimiento de su progreso y calificar sus tareas de manera eficiente. 
                </p>
                <p>Además de ofrecer herramientas de análisis y generación de informes para que los profesores puedan evaluar el rendimiento de los estudiantes y mejorar la eficiencia del proceso educativo. Con una interfaz intuitiva y fácil de usar, SACAT es una solución integral para cualquier institución educativa que busque mejorar la gestión de sus actividades académicas.</p>
            </div>

            <div class="form-user">
                <div class="form-img">
                    <div class="icon-user">
                        <div>
                            <i class="fa-solid fa-user fa-5x" style="color: #333333;"></i>
                        </div>
                        <h4>Inicio de sesión</h4>
                    </div>
                </div>
                <div class="form-container">
                    <form action="" method="post">

                        <div class="input-icon">
                            <i class="fa-solid fa-envelope fa-xl" style="color: #333333;"></i>
                            <input class="input-correo" type="email" name="" id="" placeholder="correro electronico">
                        </div>
                        <div class="input-icon">
                            <i class="fa-solid fa-lock fa-xl" style="color: #333333;"></i>
                            <input class="input-contraseña" type="password" name="" id="" placeholder="contraseña">
                        </div>
                        
                        <a href="#">¿Has olvidado tu contraseña?</a>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn-acceder btn " type="button">ACCEDER</button>
                        </div>
                    </form>
                </div>

                <div class="btn-acceder d-grid gap-2 col-6 mx-auto">
                    <button class="btn-acceder btn " type="button">REGISTRARSE</button>
                </div>

    
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>