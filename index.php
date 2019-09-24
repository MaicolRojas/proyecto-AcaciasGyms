<!DOCTYPE html>
<html lang="es">
<head>
    <title>AcaGym</title>
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
                    <h2 style="text-align: center; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">ACACÍAS-GYM</h2>
                    <p style="text-align: justify; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">¡Hola! Gracias por visitarnos, Acacias-Gyms es un portal web que brinda información de varios gimnasios y los principales parques del municipio de Acacías-Meta, en estos podrás encontrar en los diferentes gimnasios información muy importante de estos como una galería, una sección para comentar y puntuar estos; del mismo modo con los entrenadores. Encontraras una sección de noticias sobre salud y bienestar y si tienes alguna duda, queja, sugerencia o quieres que tu gimnasio aparezca en nuestro portal web, podrás hacerlo a partir del formulario de contacto que encontraras en la parte superior en la sección llamada del mismo modo. Esperamos que te sirva nuestro portal web.</p>
                    <br>
                    <p style="text-align: justify; text-shadow: -1px -1px 1px #333, 1px -1px 1px #333, -1px 1px 1px #333, 1px 1px 1px #333;">Si quieres conocer los diferentes gimnasios da clic sobre el botón</p>
                    <a href="gimnasios.php" class="btn" style="">Visitar gimnasios</a>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DEL BANNER-->
    <style>
        #radi {
            border-radius: 22px;
        }

        figure {
            width: ;
        }
    </style>
    <!-- Inicio fiiguras -->
    <div class="building-outer">
        <div class="container">
            <div class="building-list">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/pesas.png" alt=""></figure>
                            <h4>Realiza ejercicio una vez por semana</h4>
                            <p style="text-align: justify;">Lo recomendables es practicar deporte tres veces por semana para que el cuerpo esté habituado a realizar un ejercicio, Sin embargo, un día es mejor que nada.</p>
                            <a href="https://us.emedemujer.com/bienestar/fitness/hacer-ejercicio-una-vez-a-la-semana/" target="_blank" class="btn">Más Detalles</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/bici.png" alt=""></figure>
                            <h4>Monta bicicleta</h4>
                            <p style="text-align: justify;">Montar en bicicleta supone un magnífico ejercicio cardiovascular que fortalece nuestro corazon. Además la participación de los músculos y de las articulaciones es máxima en número e intensidad durante el ejercicio del pedaleo.</p>
                            <a href="http://www.granabike.com/consejos/lista/338-montar-en-bici.html" class="btn" target="_blank">Más Detalles</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="building-box" id="radi">
                            <figure><img src="img/log/estiramientos.png" alt=""></figure>
                            <h4>YOGA</h4>
                            <p style="text-align: justify;">Realiza yoga así realizaras ejercicio suave a la vez que te relajas con diversas posturas que te beneficiara a aliviar el estrés de las largas jordanas de universidad, trabajo adquiriendo al pasar del tiempo flexibilidad<p>
                            <a href="https://www.yogayogui.com/posturas-yoga-para-relajarse/"  target="_blank" class="btn">Más Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fin figuras -->
    
    <div class="muscle-outer" style="">
            <figure><img src="img/Tips/1.png" alt=""></figure>
            <div class="muscle-para">
                <div class="outer">
                    <h3>¡COME SANO!</h3>
                    <h4 style="text-align: justify;">Come frutas y verduras a diario asi estaras con energia y fuerza a diario</h4>
                </div>
            </div>
        </div>
        <br>
        <br>
          
         <div class="finess-outer">
        <div class="container">
            <h3>"Los <span>desafíos</span> son lo que hacen la vida <span>interesante</span>….<br/><span>vencerlos</span> es lo que nos da sentido."<br/>Joshua J. Marine</h3>
        </div>
    </div>
    <br>
    <br>
    <div class="muscle-outer" style="">
        <figure><img src="img/Tips/agua.png" alt=""></figure>
        <div class="muscle-para">
            <div class="outer">
                <h3>¡TOMA MUCHA AGUA!</h3>
                <h4 style="text-align: justify;">Toma mucha agua y evita consumir bebidas azucaradas</h4>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="finess-outer" style="background: #000 url(img/Tips/tip1.jpg) no-repeat center top / cover; background-attachment: fixed;text-align:center;width: 86%;position: relative;margin: 0%;margin-left: 7%;">
        <div class="container">
            <h3>"Para tener éxito necesitas dedicar el 100 <br/>de tu <span>entrenamiento</span>, <span>dieta y enfoque</span> mental"<br/>Arnold Schwarzenegger</h3>
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