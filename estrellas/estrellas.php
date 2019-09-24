<head>
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<script src="js/jquery.min.js"></script>
	<script src="alertifyjs/alertify.js"></script>
</head>
<?php
	function guardar_estrellas($id,$estrellas){
		include "conexion.php";
		$consulta = "INSERT INTO calificacion_gym(id_calificacion,calificacion) VALUES('$id','$estrellas')";
		$query = mysqli_query($conexion, $consulta);

		if ($query) {
			echo "<script language='JavaScript'>";
			echo "alertify.alert('<center>Tu calificación ha sido enviada ¡Gracias!<br>La calificación se mostrara en unos momentos</center>');";
			
			echo "</script>";
			echo "<meta http-equiv='Refresh' content='5;url=gimnasio.php?".$id."'>";
		}else{
			echo "<script language='JavaScript'>";
			echo "alertify.error('no se pudo realizar su puntuación intentalo más tarde');";
			echo "</script>";
			echo "<meta http-equiv='Refresh' content='5;url=gimnasio.php?".$id."'>";
		}
		

	}

	function guardar_estrellas_entrenadores($id,$estrellas){
		include "conexion.php";
		$consulta = "INSERT INTO calificacion_ent (id_calificacion,calificacion) VALUES('$id','$estrellas')";
		$query = mysqli_query($conexion, $consulta);

		if ($query) {
			echo "<script language='JavaScript'>";
			echo "alertify.alert('<center>Tu calificación ha sido enviada ¡Gracias!<br>La calificación se mostrara en unos momentos</center>');";
			echo "</script>";
			echo "<meta http-equiv='Refresh' content='5;url=entrenador.php?".$id."'>";
		}else{
			echo "<script language='JavaScript'>";
			echo "alertify.error('no se pudo realizar su puntuación intentalo más tarde');";
			echo "</script>";
			echo "<meta http-equiv='Refresh' content='5;url=entrenador.php?".$id."'>";
		}
	}
?>