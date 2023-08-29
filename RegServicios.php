<?php

if (isset($_POST['btn'])) {
    include("Conexion.php");

    // $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $CedulaUsuario = $_POST['CedulaUsuario'];

    $query = "INSERT INTO
        servicios(Nombre, Descripcion, Tipo, Precio, CedulaUsuario)
        VALUES('$nombre', '$descripcion', '$tipo', '$precio', '$CedulaUsuario')";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
    echo ("Se inserto el registro en la Base de Datos a la tabla correspondiente");
    echo "<a href='frmServicios.php'>Volver</a>";
    }else {
    echo("Hay un error en la Consulta");
    }
}
?>