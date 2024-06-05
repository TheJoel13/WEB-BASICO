<!--Pagina de Presentacion de Estudiante  -PRACTICA PARA CTA -Angel joel Balderrama Resendiz
<!-formato php-->
<?php
//se corrobora que la session este iniciada de acuerdo a rol y si la sesion esta vacia te manda a loguearte
session_start();
$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
if (!isset($usuario)) {
  header("location: ../login.html");
}
//switch para que no haya erroes de vulnerabilidad y entre de acuerdo a su rol
if ($rol !== "3") {
  switch ($rol) {
    case "1":
      header("location: paginaprincipal.php");
      break;
    case "2":
      header("location: paginasegunda.php");
      break;
    default:
      header("location: login.html");
  }
}
?>
<!--archivo html-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/escudo2_0.ico" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--esto mand aun mensaje cuando se inicia la sesion -->
  <script>
  <?php

    echo "alert ('Sesion iniciada como Estudiante')";
?> </script>
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Open Sans", sans-serif
    }
  </style>
  <!--titulo de la pestaña-->
  <title>Alumno</title>
</head>

<body class="w3-theme-l5">
  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-dark w3-large w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="./tablaE.php" class="w3-bar-item w3-button w3-hide-small s3-padding-large w3-hover-dark">
      <a href="../practica3/logica/salir.php"
        class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-dark" title="My Account">
        Cerrar Sesion
      </a>
    </div>
  </div>
  <!-- contenedor -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- Grid -->
    <div class="w3-row">
      <!-- Columan izq -->
      <div class="w3-col m12">
        <!-- Perfil -->
        <div class="w3-card w3-round w3-dark">
          <div class="w3-container">
            <h4 class="w3-center">
              <?php echo $usuario ?>
            </h4>
            <p class="w3-center"><img src="./img/estudiante.png" class="w3-square"
                style="height:106px;width:106px" alt="Avatar"></p>
            <hr>
            <p">Bienvenido Alumno <?php echo $usuario ?></p>
              <p><i class="fa fa-book fa-fw w3-margin-right w3-text-theme"></i> Alumno</p>
          
          </div>
        </div>
        <br>


        <!-- fin de la columnaa -->
      </div>


      <!-- fin del grid-->
    </div>

    <!-- finaliza pagina de contenedor -->
  </div>
  <br>



</body>

</html>
<!--fin fel archivo-->