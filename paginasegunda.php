<!--PAGINA DE INICIO DE PRSENTACION MAESTRO--> <!-- PRACTICA PARA CTA  ANGEL JOEL BALDERRAMA RESENDIZ-->
<!--FORMATO PHP-->
<?php
//se corrobora si la sesion esta iniciada con su respectivo rol y que no este vacia con el isset si no se redirecciona al login
session_start();
$usuario = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
if (!isset($usuario)) {
  header("location: login.html");
}
//swtich para que que se entre a su respectivo rol y no se puedan acceder a diferentes roles cambiando el link
if ($rol !== "2") {
  switch ($rol) {
    case "1":
      header("location: paginaprincipal.php");
      break;
    case "3":
      header("location: tercerapagina.php");
      break;
    default:
      header("location: login.html");
  }
}
?>
<!--formato html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Pagina Maestro</title>
        <!--bostrap Maestro con css-->
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/front-awesome/4.7.0/css/font-awesome.min.css">
        <!--manda mensaje de inicio de sesion con su respectivo rol-->
        <script>
            <?php
            echo "alert ('Sesion iniciada como Maestro')";
            ?>
            </script>
            <style>
              html,
              h5{
                font-family:"Open Sans",sans-serif
                }
            </style>
</head>
<body class="w3-theme-15">
  <!--nav-->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-dark w3-large w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="../practica3/logica/salir.php"
        class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-dark" title="My Account">
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
                      <p">Bienvenido  Maestro <?php echo $usuario ?></p>
              </h4>
              <p class="w3-center"><img src="../practica3/img/maestro.jpg"class="w3-circle"
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
<!--fin del archivo-->