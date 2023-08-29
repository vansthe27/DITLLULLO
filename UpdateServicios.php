<?php

if (isset($_POST['btn']) && isset($_POST['id'])) {
    include("Conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $CedulaUsuario = $_POST['CedulaUsuario'];

    $query = "UPDATE servicios
            SET Nombre= '$nombre', Descripcion= '$descripcion', Tipo='$tipo', Precio='$precio', 
            CedulaUsuario= '$CedulaUsuario'
            WHERE Id=$id";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
    echo ("Registro Actualizado");
    echo "<a href='MostrarServicios'>Volver</a>";
    }else {
    echo("Hay un error en la Actualización");
    }

}  else{
    echo "ir al formulario";
    echo "<a href='frmActServicios.php'>Volver</a>";
}
?>