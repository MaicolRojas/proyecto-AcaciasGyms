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
	$consulta = "INSERT INTO comentarios (id_comentario, primer_nombre, segundo_nombres, telefono,correo,mensaje,fecha,hora) VALUES ('$id','$primer_nombre','$segundo_nombre','$telefono','$correo','$comentario','$fecha','$hora');";
	$result = mysqli_query($conexion, $consulta);

	header("location:gimnasio.php?$id");
} catch (Exception $e) {
	echo $e;
}
?>