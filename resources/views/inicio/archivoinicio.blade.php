<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Softicpro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2400098b91.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
	</style>
</head>

<body>
    <div class="contenedor">
        <div class="info">
            <h1 class="titulo">Bienvenido a SOFTICPRO</h1>
            <h3>¿Qué es SOFTICPRO?</h3>
            <h4>Softicpro es un software de gestión de actividades académicas diseñado para ayudar a estudiantes y
            profesores a organizar y administrar actividades relacionadas con la educación. 
            Con Softicpro, los estudiantes pueden crear sus tareas de manera efectiva y establecer plazos.
            <br><br> 
            Los profesores pueden utilizar Softicpro para crear y asignar tareas a 
            los estudiantes, mantener un seguimiento de su progreso y calificar sus tareas de manera eficiente. 
            Además, Softicpro ofrece herramientas de análisis y generación de informes para que los profesores
            puedan evaluar el rendimiento de los estudiantes y mejorar la eficiencia 
            del proceso educativo. Con una interfaz intuitiva y fácil de usar, Softicpro es una solución 
            integral para cualquier institución educativa que busque mejorar la gestión de sus actividades 
            académicas.</h4>
        </div>
        <div class="ingresar">
            <img src="{{ asset('img/logo.png')}}" alt="" class="img">
            <div class="ancla">
                <a href="{{ route('login-user') }}" class="btn">Ingresar</a>
            </div>
        </div>
    </div>

  </body>
</html>
