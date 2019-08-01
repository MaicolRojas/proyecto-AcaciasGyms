<?php

$_d_bd="localhost";
$nombre_db="proyecto_bd_gimnasios";
$usuario_db="root";
$pass="";

$conexion=mysqli_connect($_d_bd,$usuario_db,$pass,$nombre_db);
mysqli_set_charset($conexion,"utf8");

?>