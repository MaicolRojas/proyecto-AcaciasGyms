<!DOCTYPE html>
<html lang="es">
<head>
    <title>AcaGym</title>
    <meta charset="utf-8"> <!-- FORMATO DE CAEACTERES PARA LATINOAMERICA-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- VISTA DE COMPATIBILIDAD PARA TODOS LOS NAVEGADORES - INTERNET EXPLORER 8-->
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- ETIQUETA PARA QUE SEA RESPONSIVE-->
    <meta name="description"
        content="Una página web con el propósito de ser un directorios de gimnasios en el municipio de Acacias – Meta.">
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
    <!--EL FRAMWEORK ES Bootstrap.CSS EN LA CARPERTA CSS ADEMAS DEL ARCHVO EN LA CARPETA JS CON EL MISMO NOMBRE, PARA QUE FINALICE LA ANIMACION (JQUERY ES NECESARIO)  -->

    <!-- FIN DE LA ANIMACION -->

    <?php 
    include 'header.php';
    ?>
    <!--INICIO DEL BANNER-->
    <div class="banner-outer">
        <span class="banner-shadow"></span>
        <div class="banner-image">
            <div class="container">
                <div class="content" data-aos="fade-right">
                    <h1>ENTRENA TU CUERPO</h1>
                    <h2 style="text-align: center;">ACACIAGYM</h2>
                    <p>aquí se pone algo que inspire a hacer ejercicio y todas esas cosas...
                    la cucaracha la cucaracha ya no puede caminar porque le falta porque le 
                    falta una pata para caminar... </p>
                    <a href="http://www.google.com" class="btn" style="">INGRESAR</a>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DEL BANNER-->
    <style>
        #radi{
            border-radius: 22px;
        }
        figure{
            width: ;
        }
    </style>
    <!-- Start building -->
    <div class="building-outer">
        <div class="container">
            <div class="building-list">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/pesas.png" alt=""></figure>
                            <h4>BODY BUILDING</h4>
                            <p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
                                moderatius.</p>
                            <a href="classes-detail.html" class="btn">View Detail</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/bici.png" alt=""></figure>
                            <h4>FITNESS & BOXING</h4>
                            <p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
                                moderatius.</p>
                            <a href="classes-detail.html" class="btn">View Detail</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/estiramientos.png" alt=""></figure>
                            <h4>YOGA</h4>
                            <p>Lorem ipsum dolor sit amet, ei veritus consetetur repudiandae eam, duo ne homero nostro
                                moderatius.</p>
                            <a href="classes-detail.html" class="btn">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End building sec -->
    <datalist>
        <a>

        </a>
    </datalist>
    
<?php 
include 'footer.php';
 ?>

    <!-- SE DEBEN LLAMAR LOS ARCHIVOS JS PARA QUE FUNCIONE CORRECTAMENTE-->
    <!-- INICIO DE ARCHIVOS JS-->
        <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a> 
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