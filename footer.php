<!--BOTON DE DESPLAZAMIENTO-->
<a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<center><a href="http://www.websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
        <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=269435"></a><br><br>CONTADOR DE VISTAS</center>

           <center><div id="sfc12ulub1u82duw4dgq7u2yagp1ublh1nt"></div>
<script type="text/javascript" src="https://counter10.wheredoyoucomefrom.ovh/private/counter.js?c=12ulub1u82duw4dgq7u2yagp1ublh1nt&down=async" async></script>
<noscript><a href="https://www.contadorvisitasgratis.com" title="contadores de visitas"><img src="https://counter10.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=12ulub1u82duw4dgq7u2yagp1ublh1nt" border="0" title="contadores de visitas" alt="contadores de visitas"></a></noscript></center>

<!--https://www.contadorvisitasgratis.com/geozoom.php?c=12ulub1u82duw4dgq7u2yagp1ublh1nt&base=counter10-->
<!--BOTON DE DESPLAZAMIENTO-->
<footer class="footer" style="text-align: left;">
    <!-- Inicio del Footer -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class=" col-sm-6 col-xs-10">
                    <div class="contact-us">
                        <h3>Contactanos</h3>
                        <p>Si quieres ingresar tu gimnasio en nuestra página web para poder atraer más cliente puedes contáctenos de una de las siguientes maneras:</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>POR DEFINIR</p>
                        <a href="mailto:AcaciasGym@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>AcacyasGym@gmail.com</a>
                        <a href="tel:+57-322-848-6399"><i class="fa fa-phone" aria-hidden="true"></i>+57-322-848-6399</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-10">
                    <div class="newletter">
                        <h3>¡SUSCRIBETE! </h3>
                        <p>Para recibir informacion sobre todo lo relacionado con deporte y bienestar y/o gimasios del municipio de acacias meta.</p>
                        <div class="search-block clearfix">
                            <form method="POST">
                                <input name="mail" type="email" placeholder="Ingrese su correo" required>
                                <button class="search" name="enviar"><span class="fa fa-long-arrow-right"></span></button>
                            </form>
                        </div>
                        <ul class="follow-us clearfix">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-youtube-play"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del Footer -->
    <?php
    @$mail = $_POST['mail'];
    if (isset($_POST['enviar'])) {
        include 'correo_suscribirse\enviar.php';
        /*Configuracion de variables para enviar el correo*/
        $mail_username = "acaciasgyms@gmail.com"; //Correo electronico saliente ejemplo: tucorreo@gmail.com
        $mail_userpassword = "3112031849"; //Tu contraseña de gmail
        $mail_addAddress = "$mail"; //correo electronico que recibira el mensaje
        $template = "correo_suscribirse\plantilla.html"; //Ruta de la plantilla HTML para enviar nuestro mensaje

        /*Inicio captura de datos enviados por $_POST para enviar el correo */
        $mail_setFromEmail = "AcaciasGym@gmail.com";
        $mail_setFromName = "AcaciasGym";

        $dominio = $_SERVER["HTTP_HOST"];
        $res = $_SERVER["REQUEST_URI"];
        $url = "http://" . $dominio . $res;
        $acortador = explode("w/", $url);
        $ruta = $id_gym[1];

        sendemail($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template,$url); //Enviar el mensaje

    }
    ?>
    <!-- Copy Rights -->
    <div class="copy-rights-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p>© Todos los derechos reservados 2019. Plataforma digital AcacyasGym.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de  Copy Rights -->
</footer>