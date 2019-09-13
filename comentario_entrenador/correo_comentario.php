<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap Cover Template</title>
    <style type="text/css">

    </style>
    <link rel='stylesheet' href='../css/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
</head>

<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container container">
                <div class="masthead clearfix">
                    <div class="cover-container container inner">
                        <h3 class="masthead-brand" style="text-align: center; font-family: 'Poppins'; font-size: 40px; font-weight: bold">¡Has recibido un nuevo comentario!</h3>
                        <div class="inner cover">
                            <!--<h1 class="cover-heading" style="font-family: 'Poppins'">{{correo}}</h1>-->
                            <p class="lead" style="text-align: justify; font-family: 'Poppins'; font-size: 20px; font-weight: bold">¡Hola {{nombre_entrenador}} {{apellido_entrenador}}!
                            </p>
                            <p class="lead" style="text-align: justify; font-family: 'Poppins'; font-size: 20px; font-weight: bold">Has recibido un nuevo <a href="http://localhost/Acacias-Gym/www/gimnasio.php?{{id}}" style="color: #00b3ed">Comentario</a>. <br>Más informacíon del comentario:</p>
                            <p class="lead" style="text-align: left;">Nombre : {{nombre}} {{apellido}}</p>
                            <p class="lead" style="text-align: left;">Telefono : {{telefono}}</p>
                            <p class="lead" style="text-align: left;">Correo : {{correo}}</p>
                            <p class="lead" style="text-align: left;">Mensaje : {{mensaje}}</p>

                            <p class="" style="text-align: left; font-size: 15px">fecha : {{fecha}}</p>
                            <p class="" style="text-align: left; font-size: 15px">hora : {{hora}}</p>
                            <p class="lead" style="font-family: 'Poppins'; font-size: 40px; font-weight: bold">!Gracias!</p>
                            <p class="lead">
                                <a href="http://localhost/Acacias-Gym/www/" class="btn btn-lg btn-default" style="color: #00b3ed">AcaciasGym</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mastfoot mt-auto" style="background-color: black; color: white">
    <!--<div class="inner">-->
      <p>© Todos los derechos reservados 2019. Plataforma digital AcacyasGym.</p>
    <!--</div>-->
  </footer>
</body>
</html>