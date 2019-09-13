<?php
/*include 'conexion.php';
            if (isset($_POST['estrellas'])) {
               $a = $_POST['estrellas'];

               $s = "INSERT INTO prueba (estrella) VALUES ('$a')";
               $f = mysqli_query($conexion,$s);

               if ($f) {
               		echo "<script language='JavaScript'>";
					echo "alertify.alert('El mensaje fue enviado correctamente');";
					echo "</script>";
                 	header('Location:gimnasio.php?'.$id);
               }
            }*/


            function punt($valor , $id){
            	$s = "INSERT INTO prueba (estrella) VALUES ('$a')";
               $f = mysqli_query($conexion,$s);

               if ($f) {
               		echo "<script language='JavaScript'>";
					echo "alertify.alert('El mensaje fue enviado correctamente');";
					echo "</script>";
                 	header('Location:gimnasio.php?'.$id);
               }
            }
?>