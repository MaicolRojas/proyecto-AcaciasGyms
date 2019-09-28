<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
	    <meta charset="utf-8">
    <!-- FORMATO DE CAEACTERES PARA LATINOAMERICA-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- VISTA DE COMPATIBILIDAD PARA TODOS LOS NAVEGADORES - INTERNET EXPLORER 8-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ETIQUETA PARA QUE SEA RESPONSIVE-->
    <meta name="description" content="Una página web con el propósito de ser un directorios de gimnasios en el municipio de Acacias – Meta.">
    <!-- DESCRIPCION DE LA PAGINA-->
    <meta name="author" content="Maicol Andrey Rojas">
    <!--AUTORES-->
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.jpg">
    <!-- ICONO -->

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

</head>
<body>
<?php
include 'header.php';
?>
    <!--<div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>-->
    <br><br><br>
 <div class="news-outer">
            <div class="container">
                <div class="head">
                    <center><h3 style="font-weight: bold;">Ultimas noticias</h3></center>
                </div>
                <div class="news-list">
                    <div class="row">
                        <?php 
                        $es = "SELECT * FROM noticias ORDER BY fecha DESC";
                        $rses = mysqli_query($conexion, $es);
                        while ($campo = mysqli_fetch_array($rses, MYSQLI_BOTH)) {
                            $fechaG = $campo['fecha'];
                            $acortador = explode("-", $fechaG);

                            $dia = $acortador[2];
                            $mes = $acortador[1];
                            $año = $acortador[0];

                            $fechaB = $dia . "-".$mes."-".$año;

                            echo "<div class='col-sm-4 col-xs-12'>
                            <div class='news-box'>
                                <figure><img src='".$campo['imagenes']."' alt=''>
                                    <div class='date-box'>
                                        <span>".$fechaB."</span>
                                        
                                    </div>
                                </figure>
                                <h4 style='font-weight: bold; text-align:justify;'>".$campo['nombre']."</h4>
                                <p style='text-align: justify;''>".$campo['descripcion']." <a target='_blank' href='".$campo['url']."'>Más Detalles...</a></p>
                            </div>
                        </div> <br>";

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php
include 'footer.php';
?>

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

</body>
</html>