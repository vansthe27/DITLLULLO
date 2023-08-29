<?php 

if (isset($_POST['btn']) && isset($_POST['id'])) {
    include("Conexion.php");

    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $precio = $_POST['precio'];
    $observacion = $_POST['observ'];
    $CedulaUsuario = $_POST['CedulaUsuario'];
    $IdServicios = $_POST['servicios'];
    $estado = $_POST['estado'];

    
    $query = "UPDATE solicitudes
        SET Fecha= '$fecha', Precio= '$precio', Observacion='$observacion', CedulaUsuario='$CedulaUsuario', 
        IdServicios= '$IdServicios', Estado= '$estado'
        WHERE Id=$id";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
    echo ("Registro Actualizado");
    echo "<a href='MostrarSolicitudes.<php'>Volver</a>";
    }else {
    echo("Hay un error en la Actualización");
    }

}  else{
    echo "ir al formulario";
    echo "<a href='frmActSolicitudes.php'>Volver</a>";
}
