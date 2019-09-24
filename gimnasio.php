<!DOCTYPE html>
<html lang="es">

<head>
    <title>AcaGym</title>
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

    <link href="css/starrr.css" rel=stylesheet>

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

    <!-- INICIO DEL BANNER -->
    <div class="banner-outer inner-banner  about-us-banner">
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
                $consulta = "SELECT * FROM gimnasio WHERE id_gimnasio = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                    echo "<h1>" . $campo['nombre_gimnasio'] . "</h1>";

                    ?>

                    <div class="breadcrumbs_outer">
                        <div class="container">
                            <ul class="breadcrumbs">
                                <li><a href="index.php" style="color: white">Inicio</a></li>
                                <li>Gimnasios</li>
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
                            echo "<h3><span>" . $campo['nombre_gimnasio'] . "</span></h3>";
                            echo "<p style='text-align: justify;'>" . $campo['descripcion'] . "</p>";
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <?php
                        echo "<figure class='about-top-right'><img style='max-width: 400px;' src='". $campo['imagen_gimnasio']."'></figure>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- FIN DE LA DESCRIPCION -->
    <div class="trainers-outer">
        <div class="container">
            <div class="head border">
                <h3><span>ENTRENADORES</span></h3>
            </div>
            <div class="trainers-list">
                <div class="trainers-slider owl-carousel">
                    <?php
                    $consulta2 = "SELECT gimnasio.*, entrenadores.* FROM gimnasio_entrenadores INNER JOIN entrenadores ON (entrenadores.id_entrenadores = gimnasio_entrenadores.id_entrenadores) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_entrenadores.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resultado2 = mysqli_query($conexion, $consulta2);
                    while ($campo2 = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                        echo "<div class='item'>
                                    <div class='trainers-box'>
                                        <a href='entrenador.php?".$campo2['id_entrenadores']."'><figure><img src='".$campo2['imagen_entrenador']. "' alt=''></figure></a>
                                        <a href='entrenador.php?".$campo2['id_entrenadores']."'><span style='background: #00b3ed; color:white;border:#ced4da;'>" . $campo2['nombre_entrenador'] . " " . $campo2['apellido_etrenador'] . "</span></a>
                                    </div>
                                </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE ENTRENADORES -->
    <br>
    <!-- INICIO DE DESCRIPCION DE QUIPAMENTO PREMIOS CLIENTES SATISFECHOS ETC -->
    <div class="counter-outer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="counter-box">
                        <?php
                        $Const = "SELECT * FROM caracterisitcas WHERE id_caracteristicas = '$id'";
                        $reslt = mysqli_query($conexion, $Const);
                        while ($ress = mysqli_fetch_array($reslt, MYSQLI_BOTH)) {
                        ?>
                        <figure><img src="images/counter1.png" alt=""></figure>
                        <?php echo " <strong class='counter'>".$ress['entrenadores']."</strong>"; ?>
                        <small>Entrenadores</small>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="counter-box">
                        <figure><img src="images/counter2.png" alt=""></figure>
                        <?php echo " <strong class='counter'>".$ress['clientes_satisfechos']."</strong>"; ?>
                        <small>Clientes satisfechos</small>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="counter-box">
                        <figure><img src="images/counter3.png" alt=""></figure>
                        <?php echo " <strong class='counter'>".$ress['premios_recibidos']."</strong>"; ?>
                        <small>Premios recibidos</small>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="counter-box">
                        <figure><img src="images/counter4.png" alt=""></figure>
                        <?php echo " <strong class='counter'>".$ress['equipamentos']."</strong>"; ?>
                        <small>Euipamentos</small>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- FIN DESCRIPCION DE EQUIPAMENTO PREMIOS ETC -->
    <br>
    <!--CUADRO DE INFORMACION-->
    <!--<div class="professional-outer" style="background: url('img/banner/banner1.jpg')no-repeat center top / cover; text-align: justify;">
        <div class="container">
            <div class="professional-list">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="professional-box">
                            <figure><img src="images/corses-icon.png" alt=""></figure>
                            <h4 class="col">10 clases a la semana</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="professional-box">
                            <figure><img src="images/professional-icon.png" alt=""></figure>
                            <h4>6 Entrenadores profesionales</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="professional-box">
                            <figure><img src="images/effective-icon.png" alt=""></figure>
                            <h4>Entrenamientos en grupo</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--FIN CUADRO DE INFORMACION-->
    <br>
    <!--INFORMACION SOBRE SERVICIOS-->
    <!-- consulta: SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = 1-->
    <div class="feature-outer classes-page">
        <div class="container">
            <div class="head border">
                <h3><span style="color: #00b3ed">SERVICIOS</span></h3>
            </div>
            <div class="feature-list">
                <div class="row">
                    <?php
                    $sql = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resul = mysqli_query($conexion, $sql);
                    while ($res = mysqli_fetch_array($resul, MYSQLI_BOTH)) {
                        echo "<div class='col-sm-4 col-xs-12'>
                            <div class='feature-box'>
                                <figure>
                                    <img src='".$res['imagen_servicio']."'>
                                    <div class='time-box'>
                                        <span class='date'><span>" . $res['hora_de_apertura'] . "</span></span>
                                        <span class='time'><span>" . $res['hora_de_cierre'] . "</span></span>
                                    </div>
                                </figure>
                                <h4>" . $res['tipo_de_servicio'] . "</h4>
                                <p style='text-align:justify'>" . $res['descripcion_servicio'] . "<a href='classes.php'style='color: #00b3ed;'> Ver Mas...</a></p>   
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DE INFORMACION SOBRE SERVICIOS-->

    <!--CLASES-->
    <div class="classSch-outer schedulePage">
        <div class="container">
            <div class="head border">
                <h3><span style="color: #00b3ed">CLASES</span></h3>
            </div>
            <div class="head">
                <h3>FUTURAS CLASES</h3>
            </div>
            <ul class="tabs">
                <li class="active"><a href="#lun">LUNES</a></li>
                <li><a href="#mar">MARTES</a></li>
                <li><a href="#mier">MIERCOLES</a></li>
                <li><a href="#jue">JUEVES</a></li>
                <li><a href="#vier">VIERNES</a></li>
                <li><a href="#sab">SABADO</a></li>
                <li><a href="#dom">DOMINGO</a></li>
            </ul>
            <div class="table-outer">
                <table class="table tab_container" id="lun">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <table class="table tab_container" id="mar">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <table class="table tab_container" id="mier">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <table class="table tab_container" id="jue">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <table class="table tab_container" id="vier">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <table class="table tab_container" id="sab">
                    <?php
                    $sqli = "SELECT gimnasio.*, servicio.* FROM gimnasio_servicio INNER JOIN servicio ON (servicio.id_servicio = gimnasio_servicio.id_servicio) INNER JOIN gimnasio ON (gimnasio.id_gimnasio = gimnasio_servicio.id_gimnasio) WHERE gimnasio.id_gimnasio = '$id'";
                    $resu = mysqli_query($conexion, $sqli);
                    while ($rst = mysqli_fetch_array($resu, MYSQLI_BOTH)) {
                        echo "<tbody>
                            <tr>
                                <td style='font-weight: bold;'>" . $rst['tipo_de_servicio'] . "</td>
                                <td>" . $rst['hora_de_apertura'] . ' AM' . "</td>
                                <td>" . $rst['hora_de_cierre'] . ' PM' . "</td>
                                <td style='font-weight: bold;'>" . $rst['nombre_gimnasio'] . "</td>
                            </tr>
                        </tbody>";
                    }
                    ?>
                </table>
                <style>
                    .er {
                        font-weight: bold;
                    }
                </style>
                <table class="table tab_container" id="dom">
                    <tbody>
                        <tr>
                            <td class="er">NO HAY CLASES DISPONIBLES</td>
                            <td class="er">NO HAY CLASES DISPONIBLES</td>
                            <td class="er">NO HAY CLASES DISPONIBLES</td>
                            <td class="er">NO HAY CLASES DISPONIBLES</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--FIN DE CLASES-->
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
                        $sq = "SELECT * FROM gimnasio WHERE id_gimnasio = '$id'";
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
                    <h3><span style="color: #00b3ed">TÚ GALERIA</span></h3>
                </div>
                <ul class="tabs">
                    <li class="active"><span data-filter="*">Imagenes</span></li>
                </ul>
                <div class="gallery-list">
                    <div class="row grid">
                    <?php
                    $consulta2 = "SELECT * FROM galeria_gimnasio WHERE id_galeria = '$id'";
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
    <!-- FIN DE LA GALERIA>-->
        <div class="about-top-outer">
            <div class="container">
                <div class="head border">
                    <h3><span style="color: #00b3ed">DA UN CALIFICACIÓN</span></h3>
                </div>
                <div class="rows">
                    <form method="POST">
                    <div class="container">
                        <p class="clasificacion">
                          <input id="radio1" type="radio" name="estrellas" value="5">
                          <label for="radio1">★</label>
                          <input id="radio2" type="radio" name="estrellas" value="4">
                          <label for="radio2">★</label>
                          <input id="radio3" type="radio" name="estrellas" value="3">
                          <label for="radio3">★</label>
                          <input id="radio4" type="radio" name="estrellas" value="2">
                          <label for="radio4">★</label>
                          <input id="radio5" type="radio" name="estrellas" value="1">
                          <label for="radio5">★</label>
                        </p>
                        <input type="submit" name="clasificacion" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
             if (isset($_POST['estrellas'])) {
                $estrellas = $_POST['estrellas'];
                include 'estrellas\estrellas.php';
                guardar_estrellas($estrellas);
             }
        ?>
    <!--COMENTARIOS-->
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
                            $consulta = "SELECT * FROM gimnasio WHERE id_gimnasio = '$id'";
                            $resultado = mysqli_query($conexion, $consulta);
                            while ($campo = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
                                $gim = $campo['correo_gimnasio'];
                                $nombre_gym = $campo['nombre_gimnasio'];
                            }
                            $consulta = "INSERT INTO comentarios (id_comentario, primer_nombre, segundo_nombre, telefono,correo,mensaje,fecha,hora) VALUES ('$id','$primer_nombre','$segundo_nombre','$telefono','$correo','$comentario','$fecha','$hora');";
                            $result = mysqli_query($conexion, $consulta);

                            include 'comentario_gym\enviar_comen.php';
                            /*Configuracion de variables para enviar el correo*/
                            $mail_username = "acaciasgyms@gmail.com"; //Correo electronico saliente ejemplo: tucorreo@gmail.com
                            $mail_userpassword = "3112031849"; //Tu contraseña de gmail
                            $mail_addAddress = "$correo"; //correo electronico que recibira el mensaje
                            $template = "comentario_gym\correo_comentario.html"; //Ruta de la plantilla HTML para enviar nuestro mensaje

                            /*Inicio captura de datos enviados por $_POST para enviar el correo */
                            $mail_setFromEmail = "AcaciasGym@gmail.com";
                            $mail_setFromName = "AcaciasGym";

                            email_enviar($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template, $primer_nombre, $segundo_nombre, $telefono, $correo, $comentario, $id, $nombre_gym); //Enviar el mensaje

                        } catch (Exception $e) {
                            echo $e;
                        }
                    }
                    ?>

                    <div class="comments-wrapper">
                        <?php
                        $sql = "SELECT COUNT(*) total FROM comentarios WHERE id_comentario = '$id'";
                        $result = mysqli_query($conexion, $sql);
                        $fila = mysqli_fetch_assoc($result);
                        echo "<h3>" . $fila['total'] . " COMENTARIO(s)" . "</h3>";

                        ?>
                        <ul class="row comments">
                            <?php
                            $comentarios = "SELECT * FROM comentarios WHERE id_comentario = '$id'";
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
        <script src="js/starrr.js"></script>
    <!-- FIN DE ARCHIVOS JS-->
</body>

</html>
