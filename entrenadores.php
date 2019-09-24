<!DOCTYPE html>
<html lang="es">

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
    <div class="banner-outer inner-banner trainers-banner">
        <span class="banner-shadow"></span>
        <div class="container">
            <div class="content">
                <h1>ENTRENADORES</h1>
                <div class="breadcrumbs_outer">
                    <div class="container">
                        <ul class="breadcrumbs">
                            <li><a href="index.php" style="color: #00b3ed">INICIO</a></li>
                            <li>ENTRENADORES</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DEL BANNER -->
    <div class="trainers-outer bgNone trainers-page">
        <div class="container">
            <div class="trainers-list">
                <div class="row">
                    <?php
                    include("conexion.php");
                    $consulta = "SELECT * FROM entrenadores";
                    $resultado = mysqli_query($conexion, $consulta);
                    while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                        //echo $campo['Nombre_entrenador'];
                        echo "<div class='col-sm-3 col-xs-12'>
                            <div class='trainers-box'>
                                <a href='entrenador.php?".$campo['id_entrenadores']."'><figure><img style='border-radius:2%;' src='".$campo['imagen_entrenador']."'></a></figure>
                                <a href='entrenador.php?".$campo['id_entrenadores'] . "' style='color:black'><br><span style=' font-family: poppins;background: #00b3ed; color:white;border:#ced4da;'>" . $campo['nombre_entrenador'] . " " . $campo['apellido_etrenador'] . "<br></span></a>
                            </div>
                        </div>";
                        #estilo del span background: #00b3ed; color:white;border:#ced4da;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

        <?php
        include("footer.php");
        ?>
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