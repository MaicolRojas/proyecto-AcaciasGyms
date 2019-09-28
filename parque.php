<!DOCTYPE html>
<html lang="es">

<head>
    <title>Parques</title>
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
    <!--EL FRAMWEORK ES Bootstrap.CSS EN LA CARPERTA CSS ADEMAS DEL ARCHVO EN LA CARPETA JS CON EL MISMO NOMBRE, PARA QUE FINALICE LA ANIMACION (JQUERY ES NECESARIO)  -->

    <!-- FIN DE LA ANIMACION -->

    <?php
    include 'header.php';
    ?>

    <!-- INICIO DEL BANNER -->
    <div class="banner-outer inner-banner  about-us-banner" style="background: url(img/banner/Banner-park2.jpg)no-repeat center top / cover;">
        <span class="banner-shadow"></span>
        <div class="container">
            <div class="content" data-aos="fade-down">
                <?php
                $dominio = $_SERVER["HTTP_HOST"];
                $res = $_SERVER["REQUEST_URI"];
                $url = "http://" . $dominio . $res;

                $id_gym = explode("p?", $url);
                $id = $id_gym[1];

                include 'conexion.php';
                $consulta = "SELECT * FROM parque WHERE id_parque = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                    echo "<h1 stye = 'color: #007bff'>" . $campo['nombre_parque'] . "</h1>";

                    ?>

                    <div class="breadcrumbs_outer">
                        <div class="container">
                            <ul class="breadcrumbs">
                                <li><a href="index.php" style="color: #00b3ed">Inicio</a></li>
                                <li>Parques</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN DEL BANNER -->
        <!--DESCRIPCION E IMAGEN-->
        <div class="about-top-outer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-xs-12">
                        <div class="about-top-left">
                            <?php
                            echo "<h3><span>" . $campo['nombre_parque'] . "</span></h3>";
                            echo "<p style='text-align: justify;'>" . $campo['descripcion'] . "</p>";

                            echo "<p style='text-align: justify; font-weight: bold;'>DIRECCIÓN: ".$campo['direccion']."</p>";
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <?php
                        echo "<figure class='about-top-right'><img style='max-width: 400px;' src='". $campo['imagen_parque']."'></figure>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <style type="text/css">
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    <!--MAPA POR MEDIO DE GOOGLE MAPS-->
    <div class="about-top-outer">
        <div class="container">
            <div class="head border">
                <h3><span style="color: #00b3ed">MAPAS: GOOGLE MAPS</span></h3>
            </div>
            <div class="rows">
                <div class="container">
                    <div class="map-outer">
                        <?php
                        $sq = "SELECT * FROM parque WHERE id_parque = '$id'";
                        $rs = mysqli_query($conexion, $consulta);
                        while ($mp = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                            $_POST['Lat'] = $mp['latitud'];
                            $_POST['Lon'] = $mp['longitud'];
                            echo "<script>";
                            echo "var_lat =" . $_POST['Lat'] . "\n";
                            echo "var_lon =" . $_POST['Lon'] . "\n";
                            echo "</script>";
                            ?>
                            <div id="map"></div>
                            <script>
                                function initMap() {
                                    var coord = {
                                        lat: var_lat,
                                        lng: var_lon
                                    };
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 17,
                                        center: coord
                                    });
                                    var marker = new google.maps.Marker({
                                        position: coord,
                                        map: map
                                    });
                                }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap" async defer></script>
                            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap"async defer></script>-->
                            <!--<div id="map"></div>
                                <script src="script.php"></script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN MAPA POR MEDIO DE GOOGLE MAPS-->
            <br>
            <!--MAPA POR MEDIO DE WAZE -->
            <div class="about-top-outer">
                <div class="container">
                    <div class="head border">
                        <h3><span style="color: #00b3ed">MAPA: WAZE</span></h3>
                    </div>
                    <div class="rows">
                        <div class="container">
                            <div class="map-outer map">
                                <?php
                                echo "<iframe src='https://embed.waze.com/iframe?zoom=16&lat=" . $mp['latitud'] . "&lon=" . $mp['longitud'] . "&pin=1&desc=9'
                            width='100%' height='520'></iframe>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MAPA POR MEDIO DE WAZE -->
    <!--GALERIA-->
    <!--FIN DE LA GALERIA-->
    <div class="gallery-outer about-top-outer">
            <div class="container">
                <div class="head border">
                    <h3><span style="color: #00b3ed">Galeria del parque</span></h3>
                </div>
                <ul class="tabs">
                    <li class="active"><span data-filter="*">Imagenes</span></li>
                </ul>
                <div class="gallery-list">
                    <div class="row grid">
                    <?php
                    $consulta2 = "SELECT COUNT(*) as cantidad FROM galeria_parque WHERE id_galeria = '$id'";
                    $resultado2 = mysqli_query($conexion, $consulta2);
                    while ($campo = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                        $cantidad = $campo['cantidad'];
                    }
                    if ($cantidad>0) {
                       $consulta2 = "SELECT * FROM galeria_parque WHERE id_galeria = '$id'";
                        $resultado2 = mysqli_query($conexion, $consulta2);
                        while ($campo = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                        echo "<div class='col-sm-3 col-xs-12 element-item yoga'>
                        <div class='gallery-box'><figure><img src='".$campo['imagen']."'></figure>
                        <a href='".$campo['imagen']."' class='gallery-overlay'><i class='fa fa-search-plus'></i></a></div></div>";
                        }
                    }else{
                        echo "<p>No hay imagenes por el momento</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FIN DE LA GALERIA>

    <!--FIN DE COMENTARIOS-->
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
<script>
    function iniciarMap() {
        var coord = {
            lat: 3.987078,
            lng: -73.765383
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: coord
        });
        var marker = new google.maps.Marker({
            position: coord,
            map: map
        });
    }
</script>