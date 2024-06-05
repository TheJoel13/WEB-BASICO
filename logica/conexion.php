<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "practica";
$conexion = mysqli_connect($host,$usuario,$password,$bd);
if($conexion){
    echo "";
} else {
    die("Error de conexión");
}
?>