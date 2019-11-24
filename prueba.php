<?php
$dominio = $_SERVER["HTTP_HOST"];
$res = $_SERVER["REQUEST_URI"];
$url = "http://" . $dominio . $res;

 $ubi = explode("w/", $url);
$ubicacion = $ubi[1];

echo $ubicacion;
?>