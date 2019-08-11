<?php
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
	$comentario= $_POST['comentario'];
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

	include 'correo_comentario\enviar_comen.php';
        /*Configuracion de variables para enviar el correo*/
        $mail_username = "acaciasgyms@gmail.com"; //Correo electronico saliente ejemplo: tucorreo@gmail.com
        $mail_userpassword = "3112031849"; //Tu contraseña de gmail
        $mail_addAddress = "$correo"; //correo electronico que recibira el mensaje
        $template = "correo_comentario\correo_comentario.php"; //Ruta de la plantilla HTML para enviar nuestro mensaje

        /*Inicio captura de datos enviados por $_POST para enviar el correo */
        $mail_setFromEmail = "AcaciasGym@gmail.com";
        $mail_setFromName = "AcaciasGym";

        email_enviar($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template,$primer_nombre,$segundo_nombre,$telefono,$correo,$comentario,$id,$nombre_gym); //Enviar el mensaje

	header("location:gimnasio.php?$id");
} catch (Exception $e) {
	echo $e;
}
?>