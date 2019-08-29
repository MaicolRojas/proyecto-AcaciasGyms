<?php
$dominio = $_SERVER["HTTP_HOST"];
$res = $_SERVER["REQUEST_URI"];
$url = "http://" . $dominio . $res;
echo $url;
?>