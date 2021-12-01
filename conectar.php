<?php
$servidor = "cifpzonzamas.org";
$usuario = "institu3_neptuno";
$password = "neptuno";
$bd = "institu3_neptuno";



$mysqli = new mysqli($servidor, $usuario, $password, $bd);
$mysqli->set_charset("utf8");

if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli->connect_error;
exit();
}

?>