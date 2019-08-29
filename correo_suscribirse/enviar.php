<!--Author: Obed Alvarado
Author URL: http://obedalvarado.pw
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/ !-->

<head>
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<script src="js/jquery.min.js"></script>
	<script src="alertifyjs/alertify.js"></script>
</head>
<?php
function sendemail($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template)
{
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();                            // Establecer el correo electrónico para utilizar SMTP
	$mail->Host = 'smtp.gmail.com';             // Especificar el servidor de correo a utilizar 
	$mail->SMTPAuth = true;                     // Habilitar la autenticacion con SMTP
	$mail->Username = $mail_username;          // Correo electronico saliente ejemplo: tucorreo@gmail.com
	$mail->Password = $mail_userpassword; 		// Tu contraseña de gmail
	$mail->SMTPSecure = 'tls';                  // Habilitar encriptacion, `ssl` es aceptada
	$mail->Port = 587;                          // Puerto TCP  para conectarse 
	$mail->setFrom($mail_setFromEmail, $mail_setFromName); //Introduzca la dirección de la que debe aparecer el correo electrónico. Puede utilizar cualquier dirección que el servidor SMTP acepte como válida. El segundo parámetro opcional para esta función es el nombre que se mostrará como el remitente en lugar de la dirección de correo electrónico en sí.
	$mail->addReplyTo($mail_setFromEmail, $mail_setFromName); //Introduzca la dirección de la que debe responder. El segundo parámetro opcional para esta función es el nombre que se mostrará para responder
	$nombre1 = explode("@", $mail_addAddress);
	$nombre2 = $nombre1[0];
	$mail->addAddress($mail_addAddress);   // Agregar quien recibe el e-mail enviado
	$message = file_get_contents($template);
	$message = str_replace('{{NOMBRE}}', $nombre2, $message);
	date_default_timezone_set('America/Bogota');
	$fecha = date("d-m-Y");
	$hora = date("h:i a");
	$message = str_replace('{{FECHA}}', $fecha, $message);
	$message = str_replace('{{HORA}}', $hora, $message);
	$mail->isHTML(true);  // Establecer el formato de correo electrónico en HTML
	$mail->Subject = "¡Estas Suscrito en AcaciasGym!";
	$mail->CharSet = "UTF-8";
	$mail->SetFrom('mi correo', $nombre2);
	$mail->msgHTML($message);
	/*if(!$mail->send()) {
		echo '<p style="color:red">No se pudo enviar el mensaje..';
		echo 'Error de correo: ' . $mail->ErrorInfo."</p>";
	} else {
		echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
	}*/
	try {
		include 'conexion.php';
		$consulta = "SELECT * FROM correos_personas WHERE correo = '$mail_addAddress'";
		$resultado = mysqli_query($conexion, $consulta);
		if (mysqli_num_rows($resultado) > 0) {
			echo "<script language='JavaScript'>";
			echo "alertify.alert('El correo ya se encuentra suscrito.');";
			echo "</script>";
		} else {
			if (!$mail->send()) {
				echo "<script language='JavaScript'>";
				echo "alertify.alert('Hubo un error. intenta mas tarde.');";
				echo "</script>";
				echo 'Error de correo: ' . $mail->ErrorInfo . "</p>";
			} else {
				echo "<script language='JavaScript'>";
				echo "alertify.alert('Se te ha enviado un correo de suscripcíon');";
				echo "</script>";
				$consulta2 = "INSERT INTO correos_personas(correo) VALUES ('$mail_addAddress');";
				$resultado2 = mysqli_query($conexion, $consulta2);
			}
		}
	} catch (Exception $e) {
		echo "Hubo un error {$mail->ErrorInfo}";
	}
}
	
?>