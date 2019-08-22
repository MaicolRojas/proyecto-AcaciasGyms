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
    <div id="loading" style="background-color:#070d38">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
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
                            <li><a href="index.php" style="color: blue">INICIO</a></li>
                            <li>ENTRENADORES</li>
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
                            ?>

                            <p style="text-align: justify;">El entrenamiento personal está orientado a poner a disposición del cliente toda la tecnología, recursos y tiempo que un profesional cualificado pueda ofrecerle, con la finalidad de alcanzar los mejores resultados en el menor tiempo, y de la forma más efectiva y segura. Este servicio busca la máxima eficiencia en los procesos, la máxima eficacia en los resultados y los mínimos riesgos en lo respectivo a la seguridad.</p>
                            <p style="text-align: justify;">Si el asesoramiento físico se diseña y se sigue de la forma adecuada, se producirá una mejora la condición física de la persona, así como su capacidad cardiaca y respiratoria y su estado general de salud.</p>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <?php
                        echo "<figure class='about-top-right'><<img src='".$campo['imagen_entrenador']."'></figure>";

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
                                    echo "<a href='tel:+1-123-456-4785'>(+57) " . $campo['telefono_entrenador'] . "</a><br/>";
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
                <h1 style="color: white">!GALERIA DEL ENTRENADOR!</h1>
            </center>
        </div>
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
                    $consulta2 = "SELECT * FROM galeria WHERE id_galeria = '$id'";
                    $resultado2 = mysqli_query($conexion, $consulta2);
                    while ($campo = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                        echo "<div class='col-sm-3 col-xs-12 element-item yoga'>
                        <div class='gallery-box'><figure><img src='".$campo['imagen']."'></figure>
                        <a href='".$campo['imagen']."' class='gallery-overlay'><i class='fa fa-search-plus'></i></a></div></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
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