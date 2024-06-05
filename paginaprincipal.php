<?php
// Verifica si la sesión no está iniciada y que no esté vacía, de ser así se manda a login.html
session_start();
$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
if (!isset($usuario)) {
    header("Location: login.html");
    exit();
}

// Switch para su respectivo rol y no haya problemas de vulnerabilidad
if ($rol !== "1") {
    switch ($rol) {
        case "2":
            header("Location: paginasegunda.php");
            exit();
        case "3":
            header("Location: tercerapagina.php");
            exit();
        default:
            // Destruye la sesión en dado caso que no sea este su rol
            session_destroy();
            header("Location: login.html");
            exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pagina Administrador</title>
    <!-- Bootstrap admin con CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Manda un mensaje de alerta una vez iniciada la sesión con su respectivo rol -->
    <script>
        alert('Sesión iniciada como Admin');
    </script>
    <!-- Estilos -->
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Open Sans", sans-serif;
        }
    </style>
</head>
<body class="w3-theme-15">
    <!-- Navbar sacada de Bootstrap -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="bienvenida.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Inicio</a>
            <a href="./tabla.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-users w3-margin-right"></i>Usuarios</a>
            <a href="./configuracion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-cog"></i></a>
            <a href="../practica3/logica/salir.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Mi cuenta">Cerrar Sesión</a>
        </div>
    </div>
    <!-- Contenedor -->
    <div class="w3-container w3-content" style="max-width:1400px; margin-top:80px">
        <!-- Grid -->
        <div class="w3-row">
            <!-- Columna izquierda -->
            <div class="w3-col m12">
                <!-- Perfil -->
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center">
                            <p>Bienvenido <?php echo $usuario; ?></p>
                        </h4>
                        <p class="w3-center"><img src="../practica3/img/admin.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                    </div>
                </div>
                <br>
            </div>
            <!-- Fin columna -->
        </div>
        <!-- Grid fin -->
    </div>
</body>
</html>
