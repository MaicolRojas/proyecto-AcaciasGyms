<!DOCTYPE html>
<html lang="es">
<style>
    .i {
        max-width: 70%;
    }
</style>

<head>
    <title>Entrenadores</title>
    <meta charset="utf-8"> <!-- FORMATO DE CAEACTERES PARA LATINOAMERICA-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- VISTA DE COMPATIBILIDAD PARA TODOS LOS NAVEGADORES - INTERNET EXPLORER 8-->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- ETIQUETA PARA QUE SEA RESPONSIVE-->
    <meta name="description" content="Una página web con el propósito de ser un directorios de gimnasios en el municipio de Acacias – Meta.">
    <!-- DESCRIPCION DE LA PAGINA-->
    <meta name="author" content="Maicol Andrey Rojas">
    <!--AUTORES-->
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.jpg"> <!-- ICONO -->

    <!-- INICIO DE ARCHIVOS CSS -->


    <!-- RESET CSS-->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- FONT AWESOME -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ICONMOON -->
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- LIGHTBOX CSS -->
    <link href="assets/lightbox/css/lightbox.css" rel="stylesheet" type="text/css">
    <!-- OWL CAROUSEL -->
    <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <!-- ANIMATE -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- AOS -->
    <link href="assets/aos/aos.css" rel="stylesheet" type="text/css">
    <!-- CUSTOM STYLE -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">



    <!-- FIN DE ARCHIVOS CSS-->

</head>

<body>
    <!-- ANIMACION DE CARGA DE INICIO-->
    <!--<div id="loading" style="background-color:#070d38">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>-->
    <?php
    include 'header.php';
    ?>
    <!-- INICIO DEL BANNER -->
    <div class="banner-outer inner-banner trainers-banner" style="background: url(img/banner/banner-prueba.jpg) no-repeat center top / cover;">
        <span class="banner-shadow"></span>
        <div class="container">
            <div class="content">
                <h1>ENTRENADORES</h1>
                <div class="breadcrumbs_outer">
                    <div class="container">
                        <ul class="breadcrumbs">
                            <li><a href="index.php" style="color:#00b3ed">INICIO</a></li>
                            <li>Entrenadores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-top-outer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <div class="about-top-left">
                        <?php
                        $dominio = $_SERVER["HTTP_HOST"];
                        $res = $_SERVER["REQUEST_URI"];
                        $url = "http://" . $dominio . $res;

                        $id_gym = explode("p?", $url);
                        $id = $id_gym[1];

                        include 'conexion.php';
                        $consulta = "SELECT * FROM entrenadores WHERE id_entrenadores = '$id'";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                            echo "<h3><span >" . $campo['nombre_entrenador'] . " " . $campo['apellido_etrenador'] . "</span></h3>";
                        }
                            ?>

                            <p style="text-align: justify;">El entrenamiento personal está orientado a poner a disposición del cliente toda la tecnología, recursos y tiempo que un profesional cualificado pueda ofrecerle, con la finalidad de alcanzar los mejores resultados en el menor tiempo, y de la forma más efectiva y segura. Este servicio busca la máxima eficiencia en los procesos, la máxima eficacia en los resultados y los mínimos riesgos en lo respectivo a la seguridad.</p>
                            <p style="text-align: justify;">Si el asesoramiento físico se diseña y se sigue de la forma adecuada, se producirá una mejora la condición física de la persona, así como su capacidad cardiaca y respiratoria y su estado general de salud.</p>

                            <?php
                        $es = "SELECT entrenadores.*, profesion.* FROM entrenadores_profesion INNER JOIN entrenadores ON (entrenadores.id_entrenadores = entrenadores_profesion.id_entrenadores) INNER JOIN profesion ON (profesion.id_profesion = entrenadores_profesion.id_profesion) WHERE entrenadores.id_entrenadores = '$id'";
                            $rses = mysqli_query($conexion, $es);
                            echo "<p style='font-weight:bold;'>CARRERAS: </p>";
                            while ($campo = mysqli_fetch_array($rses, MYSQLI_BOTH)) {
                                echo "<ul>
                                <li type='circle' style=''>".$campo['nombre_profesion']."</li>
                                </ul>";
                            }
                        ?>

                            <?php 
                            $es = "SELECT id_calificacion, SUM(calificacion) AS suma_califaciones, COUNT(*) as total_califaciones FROM calificacion_ent WHERE id_calificacion =   '$id'";
                            $rses = mysqli_query($conexion, $es);
                            while ($campo = mysqli_fetch_array($rses, MYSQLI_BOTH)) {
                               
                                $total_calificaciones = $campo['total_califaciones'];
                            
                                if ($total_calificaciones == 0) {
                                    echo "<p style='text-align: left;font-weight: bold;'>No hay califaciones por el momento</p>";               
                                }else{
                                    $calificacion = $campo['suma_califaciones'];
                                    $calify = $calificacion / $total_calificaciones; 
                                     echo "Nm de calificaciones (".$campo['total_califaciones'].")<br>";
                                    echo "<br>";
                                    echo " <p class='clasificacion' style='font-weight: bold;'>
                                    Califiación:   ".round($calify,2)."
                                    <label style='color:yellow'>★</label>  
                                    </p>";
                                }
                              }
                            ?>

                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <?php
                         $consulta = "SELECT * FROM entrenadores WHERE id_entrenadores = '$id'";
                        $resultado = mysqli_query($conexion, $consulta);
                        while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                        echo "<figure class='about-top-right'><<img style='max-width: 500px;max-height: 300px;' src='".$campo['imagen_entrenador']."'></figure>";

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="professional-outer">
            <center>
                <h1 style="color: white">!ENTRENA TU CUERPO!</h1>
            </center>
        </div>
       
        <div class="cal-info-outer">
            <div class="container">
                <div class="cal-info-list">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="cal-info-box">
                                <figure><img class="i" src="img/ico/doc.png"></figure>
                                <?php
                                echo "<p style='text-align: center'>Doc: " . $campo['documento_entrenador'] . ", Edad: " . $campo['edad_entrenador'] . "</p>";
                                ?>

                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="cal-info-box">
                                <figure><img class="i" src="img/ico/call.png"></figure>
                                <p>
                                    <?php
                                    echo "<a href='tel:+57".$campo['telefono_entrenador']."'>(+57)' " . $campo['telefono_entrenador'] . "</a><br/>";
                                    ?>

                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="cal-info-box">
                                <figure><img class="i" src="img/ico/mail.png"></figure>
                                <?php
                                echo "<p><a href='mailto:" . $campo['correo_entrenador'] . "'>" . $campo['correo_entrenador'] . "</a></p>";
                                ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
         <div class="professional-outer">
            <center>
                <h1 style="color: white">!SERVICIOS QUE OFRECE EL ENTRENADOR!</h1>
            </center>
        </div>
        <div class="feature-outer classes-page">
        <div class="container">
            <div class="head border">

            </div>
            <div class="feature-list">
                <div class="row">
                    <?php
                    $sql = "SELECT entrenadores.*, servicio.* FROM entrenadores_servicio INNER JOIN servicio ON (servicio.id_servicio = entrenadores_servicio.id_servicio) INNER JOIN entrenadores ON (entrenadores.id_entrenadores = entrenadores_servicio.id_entrenadores) WHERE entrenadores.id_entrenadores =  '$id' ";
                    $resul = mysqli_query($conexion, $sql);
                    while ($res = mysqli_fetch_array($resul, MYSQLI_BOTH)) {
                        echo "<div class='col-sm-4 col-xs-12'>
                            <div class='feature-box'>
                                <figure>
                                    <img src='" . $res['imagen_servicio'] . "'>
                                    <div class='time-box'>
                                        
                                    </div>
                                </figure>
                                <h4>" . $res['tipo_de_servicio'] . "</h4>
                                <p style='text-align:justify'>" . substr($res['descripcion_servicio'], 0, 1000) . " .  .  .  .</p>   
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
        <br>
        <div class="professional-outer">
            <center>
                <h1 style="color: white">!GALERIA DEL ENTRENADOR!</h1>
            </center>
        </div>
        <!--GALERIA-->
        <div class="gallery-outer">
            <div class="container">
                <div class="head">
                    <h3>Tú Galeria</h3>
                </div>
                <ul class="tabs">
                    <li class="active"><span data-filter="*">Imagenes</span></li>
                </ul>
                <div class="gallery-list">
                    <div class="row grid">
                    <?php
                    }
                    $consulta2 = "SELECT COUNT(*) as Cantidad FROM galeria_entrenador WHERE id_galeria = '$id'";
                    $resultado2 = mysqli_query($conexion, $consulta2);
                    while ($campo = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                        $cantidad_f = $campo['Cantidad'];
                    }
                    if ($cantidad_f > 0) {
                        $consulta2 = "SELECT * FROM galeria_entrenador WHERE id_galeria = '$id'";
                        $resultado2 = mysqli_query($conexion, $consulta2);
                        while ($campo = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                             echo "<div class='col-sm-3 col-xs-12 element-item yoga'>
                        <div class='gallery-box'><figure><img src='".$campo['imagen']."'></figure>
                        <a href='".$campo['imagen']."' class='gallery-overlay'><i class='fa fa-search-plus'></i></a></div></div>";
                        }
                    }else{
                        echo "<p>No hay imganes que mostrar por el momento</p>";
                    }
                    ?>
                </div>
            </div>
        </div></div>
        <!--FIN DE LA GALERIA-->
        <!--CALIFICACIÓN-->
        <div class="about-top-outer">
            <div class="container">
                <div class="head border">
                    <h3><span style="color: #00b3ed">DA UN CALIFICACIÓN</span></h3>
                </div>
                <div class="rows">
                    <form method="POST">
                        <div class="container">
                            <p class="clasificacion">
                                <input id="radio1" type="submit" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="submit" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="submit" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="submit" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="submit" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>
                           
                    </form>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <!--CALIFICACIÓN-->
    <?php
    if (isset($_POST['estrellas'])) {
        $estrellas = $_POST['estrellas'];
        include 'estrellas\estrellas.php';
        guardar_estrellas_entrenadores($id,$estrellas);
    }
    ?>
        <!--COMENTARIO-->
         <div class="about-top-outer">
        <div class="container">
            <div class="head border">
                <h3><span style="color: #00b3ed">DEJA UN COMENTARIO</span></h3>
            </div>
            <div class="rows">
                <div class="container">
                    <div class="form-wrapper">
                        <h3>¡Completa la informacíon!</h3><br>
                        <p>Siempre nos complace conocer su opinión, así que no dude en dejar un comentario sobre el Gimnasio y como le pareció este, o si tiene alguna duda escríbala, para obtener una respuesta.</p>
                        <?php echo "<form method='POST'>"; ?>
                        <div class="row input-row">
                            <div class="col-sm-6">
                                <input name="primer_nombre" type="text" placeholder="PRIMER NOMBRE*" required>
                            </div>
                            <div class="col-sm-6">
                                <input name="segundo_nombre" type="text" placeholder="SEGUNDO NOMBRE*" required>
                            </div>
                        </div>
                        <div class="row input-row">
                            <div class="col-sm-12">
                                <input name="telefono" type="tel" placeholder="TELEFONO*" required minlength="10" maxlength="10">
                            </div>
                        </div>
                        <div class="row input-row">
                            <div class="col-sm-12">
                                <input name="correo" type="email" placeholder="CORREO*" required>
                            </div>
                        </div>
                        <div class="row input-row">
                            <div class="col-sm-12">
                                <textarea name="comentario" placeholder="COMENTARIO*" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" name="env" class="btn" value="Enviar comentario">
                            </div>
                        </div>
                        </form>
                    </div>
                    <?php

                    if (isset($_POST['env'])) {
                        try {
                            $dominio = $_SERVER["HTTP_HOST"];
                            $res = $_SERVER["REQUEST_URI"];
                            $url = "http://" . $dominio . $res;

                            $id_gym = explode("p?", $url);
                            $id = $id_gym[1];
                            $primer_nombre = $_POST['primer_nombre'];
                            $segundo_nombre = $_POST['segundo_nombre'];
                            $telefono = $_POST['telefono'];
                            $correo = $_POST['correo'];
                            $comentario = $_POST['comentario'];
                            date_default_timezone_set('America/Bogota');
                            $fecha = date("Y-m-d");
                            $hora = date("h:i a");
                            include 'conexion.php';
                            $consulta = "SELECT * FROM entrenadores WHERE id_entrenadores = '$id'";
                            $resultado = mysqli_query($conexion, $consulta);
                            while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                                $correo_entrenador = $campo['correo_entrenador'];
                                $nombre_entrenador = $campo['nombre_entrenador'];
                                $apellido_etrenador = $campo['apellido_etrenador'];

                            }
                            $consulta = "INSERT INTO comentarios_entrenador (id_comentario, primer_nombre, segundo_nombre, telefono,correo,mensaje,fecha,hora) VALUES ('$id','$primer_nombre','$segundo_nombre','$telefono','$correo','$comentario','$fecha','$hora');";
                            $result = mysqli_query($conexion, $consulta);

                            include 'comentario_entrenador\enviar_comen.php';
                            /*Configuracion de variables para enviar el correo*/
                            $mail_username = "acaciasgyms@gmail.com"; //Correo electronico saliente ejemplo: tucorreo@gmail.com
                            $mail_userpassword = "3112031849"; //Tu contraseña de gmail
                            $mail_addAddress = "$correo"; //correo electronico que recibira el mensaje
                            $template = "comentario_entrenador\correo_comentario.html"; //Ruta de la plantilla HTML para enviar nuestro mensaje

                            /*Inicio captura de datos enviados por $_POST para enviar el correo */
                            $mail_setFromEmail = "AcaciasGym@gmail.com";
                            $mail_setFromName = "AcaciasGym";

                            email_ent($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template, $primer_nombre, $segundo_nombre, $telefono, $correo, $comentario, $id, $correo_entrenador,$nombre_entrenador, $apellido_etrenador,$url); //Enviar el mensaje

                        } catch (Exception $e) {
                            echo $e;
                        }
                    }
                    ?>

                    <div class="comments-wrapper">
                        <?php
                        $sql = "SELECT COUNT(*) total FROM comentarios_entrenador WHERE id_comentario = '$id'";
                        $result = mysqli_query($conexion, $sql);
                        $fila = mysqli_fetch_assoc($result);
                        echo "<h3>" . $fila['total'] . " COMENTARIO(s)" . "</h3>";

                        ?>
                        <ul class="row comments">
                            <?php
                            $comentarios = "SELECT * FROM comentarios_entrenador WHERE id_comentario = '$id'";
                            $come = mysqli_query($conexion, $comentarios);
                            while ($cm = mysqli_fetch_array($come, MYSQLI_BOTH)) {
                                echo "<li class='col-sm-12 clearfix'>
                                <div class='com-img'><img src='img/user.png' class='img-circle'>
                                </div>
                                <div class='com-txt'>
                                    <h3>" . $cm['primer_nombre'] . " " . $cm['segundo_nombre'] . "<span>Fecha: " . $cm['fecha'] . " Hr: " . $cm['hora'] . "</span></h3>
                                    <p>" . $cm['mensaje'] . "</p>
                                    /*<a href='#''><span class='icon-reply-icon'></span>Reply</a>*/
                                </div>";
                            }
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- FIN COMENTARIOS-->
    </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

<!-- FIN DEL BANNER -->


</body>
<!-- SE DEBEN LLAMAR LOS ARCHIVOS JS PARA QUE FUNCIONE CORRECTAMENTE-->
<!-- INICIO DE ARCHIVOS JS-->
<!--  (NECESARIO PARA BOSTSTRAP Y PLUGINS JAVASCRIPT) -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- LIGHTBOX JS -->
<script src="assets/lightbox/js/lightbox.js"></script>
<!-- OWL CAROUSEL JS -->
<script src="assets/isotope/js/isotope.min.js"></script>
<!-- OWL CAROUSEL JS -->
<script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
<!-- AOS JS -->
<script src="assets/aos/aos.js"></script>
<!-- COUNTERUP JS -->
<script src="assets/counterup/counterup.min.js"></script>
<script src="assets/counterup/waypoints.min.js"></script>
<!-- CUSTOM JS -->
<script src="js/custom.js"></script>
<!-- FIN DE ARCHIVOS JS-->

</html>