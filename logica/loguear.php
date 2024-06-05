<?php
require 'conexion.php';
session_start();
error_reporting(0);
$usuario = $_POST['usuario'];
$password = MD5($_POST['password']);

if(empty($usuario)|| empty($password)){
    header("Location: ../login.html");
}else{
    $qw = "select rol from usuarios where nombre_usuario = '$usuario' and password = '$password'";
    $consulta = mysqli_query($conexion, $qw);
    $array = mysqli_fetch_array($consulta);

    if(strlen($array["rol"]) > 0){
        switch($array["rol"]) {
            case '1': 
                $_SESSION["usuario"] = $usuario;
                $_SESSION["rol"] = $array["rol"];
                header("Location: ../paginaprincipal.php");
                break;
case '2':
                $_SESSION["usuario"] = $usuario;
                $_SESSION["rol"] = $array["rol"];
                header("Location: ../paginasegunda.php");
            break;
        case '3':
                $_SESSION["usuario"] = $usuario;
                $_SESSION["rol"] = $array["rol"];
                header("Location: ../tercerapagina.php");
                 break;
             default:
                echo "Datos incorrectos";
                echo "<a href='logica/salir.php'> Cerrar sesion </a>";
        }
    } else {
       echo"<div> DATOS INCORRECTOS <a href='logica/salir.php'> Salir </a></div> </a>";
        session_destroy();
       header("location: ../login.html");
       exit(); 

       
    }
} 
?>