<!-- INICIO HEADER -->
<header>
    <!-- INICIO DEL CONTENEDOR -->
    <div class="container header-sec">
        <div class="row">
            <span class="col-xs-12 col-sm-3 logo"><a href="index.php"><img class="main" src="img/img.png" alt="ACA-GYM"><img class="fix" src="img/img.png" alt="ACA_GYM"></a></span>
            <div class="col-xs-12 col-sm-9 header-right">
                <!--LOGOS DEL HEADER-->
                <div class="header_search_outer">
                  <a href="index.php">  <span class="icon-home"></span></a>
                    <!--ICONO DE BUSQUEDA-->
                    <!--BARRA DE BUSQUEDA-->
                </div>
                <!-- FIN DEL CONTENEDOR -->
                <!--INICIO DE BARRA DE PAGINAS-->
                <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
                    <!--INICIOS DEL NAVBAR-->
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                             <?php
                            $dominio = $_SERVER["HTTP_HOST"];
                            $res = $_SERVER["REQUEST_URI"];
                            $url = "http://" . $dominio . $res;
                            $ubi = explode("w/", $url);
                            $ubicacion = $ubi[1];
                            ?>

                            <?php
                            if ($ubicacion == 'index.php' || $ubicacion == '') {
                              echo " <li class='nav-item active'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'noticias.php') {
                                echo " <li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item active'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'parques.php') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item active'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'gimnasios.php') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item '>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item active'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";                            
                            }elseif ($ubicacion == 'entrenadores.php') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item '>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item active'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'contacto.php') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item active'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'parque.php?1' || $ubicacion == 'parque.php?2'|| $ubicacion == 'parque.php?3' || $ubicacion == 'parque.php?4' || $ubicacion == 'parque.php?5' || $ubicacion == 'parque.php?6' || $ubicacion == 'parque.php?7' || $ubicacion == 'parque.php?8' || $ubicacion == 'parque.php?9' || $ubicacion == 'parque.php?10') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item active'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'gimnasio.php?1' || $ubicacion == 'gimnasio.php?2' || $ubicacion == 'gimnasio.php?3') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item active'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }elseif ($ubicacion == 'entrenador.php?1' || $ubicacion == 'entrenador.php?2' || $ubicacion == 'entrenador.php?3' || $ubicacion == 'entrenador.php?4' || $ubicacion == 'entrenador.php?5') {
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item active'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }else{
                                echo "<li class='nav-item'>
                                <a class='nav-link' href='index.php' class='letra'>Inicio</a>
                            </li>
                
                            <li class='nav-item'>
                                <a class='nav-link' href='noticias.php'>Noticias</a>
                            </li>
                           
                            <li class='nav-item'>
                                <a class='nav-link' href='parques.php'>Parques</a>
                            </li>
                            
                            <li class='nav-item'>
                                <a class='nav-link' href='gimnasios.php'>Gimnasios</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='entrenadores.php'>Entrenadores</a>
                            </li>

                            <li class='nav-item'>
                                <a class='nav-link' href='contacto.php'>Contacto</a>
                            </li>";
                            }
                            ?>
                            
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIN DE BARRA DE PAGINAS-->
        </div>
    </div>
</div>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
</header>
<!--FIN DEL HEADER-->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152757104-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152757104-1');
</script>