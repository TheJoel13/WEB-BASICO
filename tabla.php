<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Recursos de boostrap utilizados-->
    <link rel="icon" type="image/x-icon" href="assets/escudo2_0.ico" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        .boxWide {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-dark w3-large w3-theme-d2"
                href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="paginaprincipal.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i
                    class="fa fa-home w3-margin-right"></i>Inicio</a>
            <a href="./logica/salir.php"
                class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-dark" title="My Account">
                Cerrar Sesion
            </a>
        </div>
    </div>
    <br><br><br>
    <div class="container">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="text-center">Usuarios</h1>
        <button type="button" class="btn btn-primary w3-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar usuario</button>
        <div class="table-responsive table-hover" id="tablaConsulta">
            <table class="table">
                <!-- Los campos de la tabla -->
                <thead class="text-muted">
                    <th class="text-center">ID</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Rol</th>
                </thead>
                <tbody class="text-center">
                    <!-- Consulta a la base de datos y muestra de resultados -->
                    <?php
                    require "./logica/conexion.php"; // Incluye el archivo de conexión

                    // Ejecutar la consulta SQL y verificar si fue exitosa
                    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
                    if ($consulta) {
                        while ($row = mysqli_fetch_array($consulta)) {
                            echo "<tr>";
                            echo '<td>' . $row['id'] . '</td><td>' . $row['nombre_usuario'] . '</td><td>' . $row['password'] . '</td><td>' . $row['rol'] . '</td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



    <!-- El Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- REGISTRO DE NUEVO usuario -->
                <form action="newuser.php" method="post">
                    <div class="modal-body">
                        <div class="boxWide">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="newuser" name="newuser" required>
                            <br>
                            <label for="nuevapassword" class="form-label" required>Password</label>
                            <input type="password" class="form-control" id="nuevapassword" name="nuevapassword">
                            <br>
                            <select class="form-select" aria-label="Default select example" id="nuevorol"
                                name="nuevorol">
                                <option selected>Selecciona el Rol</option>
                                <option value="1">Admin</option>
                                <option value="2">Maestro</option>
                                <option value="3">Estudiante</option>
                            </select>
                        </div>
                    </div>
                    <!-- boton para agrega rususario -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    </script></script>