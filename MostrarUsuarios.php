<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-image: url(FONDOS/Fondo50.jpg);">


    <!-- BARRA DE NAVEGACIÓN -->
    <?php
    include("Navbar.php");
    ?>


    <div class="container" style="color:white" ;>
        <br>
        <form class="d-flex" role="search">
            <input autofocus name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button name="btns" class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <br>
        <h2 style="text-align: center; color:white;">Tabla Usuarios</h2>
        <tr>
            <table class="table" style="color:white;">

                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Ocupacion</th>
                <th>Estudios</th>
                <th>Descripcion</th>
                <th>Celular</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Clave</th>
                <th>Acciones</th>
        </tr>
        <?php

        if (isset($_GET['btns'])) {
            $Search = $_GET['Buscar'];
            $Buscar = "%$Search%";
            include "Conexion.php";
            $query = "SELECT * FROM usuarios WHERE Cedula LIKE '$Buscar' or Nombre LIKE '$Buscar' or Apellido LIKE '$Buscar'";
            $conn = mysqli_query($conect, $query);
            if (mysqli_num_rows($conn) > 0) {
                while ($vec = mysqli_fetch_array($conn)) { ?>
                    <tr>
                        <td><?php echo $vec[0]; ?></td>
                        <td><?php echo $vec[1]; ?></td>
                        <td><?php echo $vec[2]; ?></td>
                        <td><?php echo $vec[3]; ?></td>
                        <td><?php echo $vec[4]; ?></td>
                        <td><?php echo $vec[5]; ?></td>
                        <td><?php echo $vec[6]; ?></td>
                        <td><?php echo $vec[7]; ?></td>
                        <td><?php echo $vec[8]; ?></td>
                        <td><?php echo $vec[9]; ?></td>
                        <td><?php echo $vec[10]; ?></td>
                        <td>
                            <a href='frmActUsuarios.php?cedula=<?php echo $vec[0] ?>'><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href='EliminarUsuario.php?cedula=<?php echo $vec[0] ?>'><i class="fa-sharp fa-solid fa-trash"></i></i></a>
                        </td>
                    </tr>
        <?php }
            } else {
                echo "No se encontraron datos para la busqueda";
            }
        } else {
            echo "Escribe un indicio de búsqueda";
        } ?>
        </table>
    </div>

    <script src="Confirmacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>
    <script src="Confirmacion.js"></script>
</body>

</html>