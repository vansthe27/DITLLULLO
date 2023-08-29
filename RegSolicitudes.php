<?php 

if (isset($_POST['btn'])) {
    include("Conexion.php");

    // $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $observacion = $_POST['observ'];
    $CedulaUsuario = $_POST['CedulaUsuario'];
    $IdServicios = $_POST['servicios'];
    $estado = $_POST['estado'];

    
    $query = "INSERT INTO
        solicitudes(Fecha, Precio, Observacion, CedulaUsuario, IdServicios, Estado)
        VALUES('$fecha', '$precio', '$observacion', '$CedulaUsuario', '$IdServicios', '$estado')";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
    echo ("Se inserto la solicitud en la Base de Datos a la tabla correspondiente");
    echo "<a href='frmSolicitudes.php'>Volver</a>";
    }else {
    echo("Hay un error en la Consulta");
    }
}
?>