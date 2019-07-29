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
                        $resultado=mysqli_query($conexion,$consulta);
                        while($campo=mysqli_fetch_array($resultado,MYSQLI_BOTH)){
                        echo "<h1>".$campo['nombre_gimnasio']."</h1>";
                        
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
                                echo "<h3><span>".$campo['nombre_gimnasio']."</span></h3>";
                                echo "<p style='text-align: justify;'>".$campo['descripcion']."</p>";
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <?php
                        echo "<figure class='about-top-right'><img style='max-width: 400px;' src='data:image/png;base64,".base64_encode($campo['imagen_gimnasio'])."'></figure>";
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
                            $resultado2=mysqli_query($conexion,$consulta2);
                            while($campo2=mysqli_fetch_array($resultado2,MYSQLI_BOTH)){
                            echo "<div class='item'>
                                    <div class='trainers-box'>
                                        <figure><img src='data:image/jpg;base64,".base64_encode($campo2['imagen_entrenador'])."' alt=''></figure>
                                        <span style='background: #00b3ed; color:white;border:#ced4da;'>".$campo2['nombre_entrenador']." ". $campo2['apellido_etrenador']."</span>
                                    </div>
                                </div>"
                            ;
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
                            <figure><img src="images/counter1.png" alt=""></figure>
                            <strong class="counter">5</strong>
                            <small>Entrenadores</small>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="counter-box">
                            <figure><img src="images/counter2.png" alt=""></figure>
                            <strong class="counter">500</strong>
                            <small>Clientes satisfechos</small>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="counter-box">
                            <figure><img src="images/counter3.png" alt=""></figure>
                            <strong class="counter">50</strong>
                            <small>Premios recibidos</small>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="counter-box">
                            <figure><img src="images/counter4.png" alt=""></figure>
                            <strong class="counter">20</strong>
                            <small>Euipamentos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN DESCRIPCION DE EQUIPAMENTO PREMIOS ETC --> 
        <br>
        <!--CUADRO DE INFORMACION-->
          <div class="professional-outer" style="background: url('img/banner/banner1.jpg')no-repeat center top / cover; text-align: justify;">
            <div class="container">
                <div class="professional-list">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="professional-box">
                                <figure><img src="images/corses-icon.png" alt=""></figure>
                                <h4 class="col">10 clases a la semana</h4>
                                <p >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="professional-box">
                                <figure><img src="images/professional-icon.png" alt=""></figure>
                                <h4>6 Entrenadores profesionales</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="professional-box">
                                <figure><img src="images/effective-icon.png" alt=""></figure>
                                <h4>Entrenamientos en grupo</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN CUADRO DE INFORMACION-->
        <br>
        <!--INFORMACION SOBRE SERVICIOS-->
         <div class="feature-outer classes-page">
            <div class="container">
                <div class="head border">
                    <h3><span style="color: #00b3ed">SERVICIOS</span></h3>
                </div>
                <div class="feature-list">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="feature-box">
                                <figure>
                                    <img src="images/feature-thumb4.png" alt="">
                                    <div class="time-box">
                                        <span class="date"><span>16 DEC</span></span>
                                        <span class="time"><span>6:30 AM</span></span>
                                    </div>
                                </figure>
                                <h4>Karate</h4>
                                <p>Aliquam eu malesuada risus. Vivamus sagittis enim tempor eros consectetur, at ullamcorper neque maximus. <a href="classes-detail.html">Read More...</a></p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN DE INFORMACION SOBRE SERVICIOS-->
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
