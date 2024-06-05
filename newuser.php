<?php
require "./logica/conexion.php";

$consulta = null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newuser = $_POST['newuser'];
    $nuevapassword = MD5($_POST['nuevapassword']);
    $nuevorol = $_POST['nuevorol'];

    $qw = "INSERT INTO usuarios (nombre_usuario, password, rol) VALUES ('$newuser', '$nuevapassword', $nuevorol)";
    $consulta = mysqli_query($conexion, $qw);


    if ($consulta) {
        header("Location: tabla.php");
        exit;
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }
}


if ($consulta) {
    $consulta_debug = mysqli_query($conexion, "SELECT * FROM usuarios");
    if ($consulta_debug) {
        while ($row = mysqli_fetch_array($consulta_debug)) {
            echo "ID: " . $row['id'] . ", Usuario: " . $row['nombre_usuario'] . "<br>";
        }
    } else {
        echo "Error en la consulta de debug: " . mysqli_error($conexion);
    }
}
