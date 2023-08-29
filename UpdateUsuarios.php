<?php

if (isset($_POST['btn']) && isset($_POST['cedula'])){
    include("Conexion.php");

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $ocupacion = $_POST['ocupacion'];
    $estudios = $_POST['estudios'];
    $descripcion = $_POST['descripcion'];
    $celular = $_POST['celular'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $contraseña = $_POST['clave'];

    $query = "UPDATE usuarios
            SET Nombre= '$nombre', Apellido= '$apellido', Correo='$correo', Ocupacion='$ocupacion', 
            Estudios= '$estudios', Descripcion= '$descripcion', Celular= '$celular', Telefono= '$telefono', 
            Direccion= '$direccion', Clave=  '$contraseña'
            WHERE Cedula=$cedula";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='MostrarUsuarios.php'>Volver</a>";
    }else {
        echo("Hay un error en la Actualización");
    }
}  else{
    echo "ir al formulario";
    echo "<a href='frmActUsuarios.php'>Volver</a>";
}
?>