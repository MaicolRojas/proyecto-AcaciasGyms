<head>
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
	<script src="js/jquery.min.js"></script>
	<script src="alertifyjs/alertify.js"></script>
</head>
<?php
	function guardar_estrellas($estrellas){
		include "conexion.php";
		$consulta = "INSERT INTO prueba(estrella) VALUES('$estrellas')";
		$query = mysqli_query($conexion, $consulta);

		if ($query) {
			echo "<script language='JavaScript'>";
			echo "alertify.alert('Su calificación ');";
			echo "</script>";
		}else{
			echo "<script language='JavaScript'>";
			echo "alertify.error('no se pudo realizar su puntuación intentalo más tarde');";
			echo "</script>";
		}
		

	}
?>