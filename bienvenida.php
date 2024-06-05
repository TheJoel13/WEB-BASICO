<?php
session_start();
if(!isset($_SESSION['rol'])){
    header("Location: login.html");
    exit();
}
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];
switch($rol) {
    case '1':
        
        
        break;
    case '2':
        if($_SESSION['rol']== 1){
            header("Location: ../paginasegunda.php");
            exit();
        }else{
            echo "<h1>Bienvenido Maestro $usuario</h1>";
            echo "<a href='logica/salir.php'> Cerrar Sesion </a>";
        }
        break;
    case '3':
        echo "<h1>Bienvenido Estudiante $usuario</h1>";
        echo "<a href='logica/salir.php'> Cerrar sesion </a>";
        break;
    default:
        header("Location: login.html?error=no_access");
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Pagina Administrador</title>
        <!--bostrap admin con css-->
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/front-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            <?php
            echo "alert ('Sesion iniciada como Admin')";
            ?>
            </script>
            <style>
              html,
              body,
              h1,
              h2,
              h3,
              h4,
              h5{
                font-family:"Open Sans",sans-serif
                }
            </style>
</head>
<body class="w3-theme-15">
  <!--navbar-->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class= "w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2d4"
      href="javascript:void(0);"onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="paginaprincipal.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i
      class="fa fa-home w3-margin-right"></i>Atras</a>
      <a href="./tabla.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i
      class="fa fa-home w3-margin-right"></i>Usuarios</a>
      <a href="./tabla.php" class="w3-bar-item w3-button w3-hide-small s3-padding-large w3-hover-white"
            title="Account Settings"><i class="fa fa-cog"></i></a>
                <a href="../practica3/logica/salir.php"
                class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large- w3-hover-white" title="Mi cuenta">
                Cerrar Sesion
              </a>
              </div>
              </div>
              <!--contenedor-->
              <div class="w3-container w3-content" style="max-width: 1400px;margin-top:80px">
              <!---Grid-->
              <div class="w3-row">
                <!--columna izuqierda-->
                <div class="w3-col m12">
                  <!--perfil-->
                  <div class="w3-card w3-round w3-white">
                    <div class="w3-container">
                      <h4 class="w3-center">
                      <p">Bienvenido Admin  <?php echo $usuario ?></p>
              </h4>
              <p class="w3-center"><img src="../practica3/img/admin.jpg"class="w3-circle"
                style="height: 106px;width:106px" alt="Avatar"></p>
                <hr>
                
              
              
              </div>
              </div>
              <br>


              <!--fin columna-->
              </div>
              <!--grid din-->
              </div>

              </div>
              <br>


</body>
</html>
