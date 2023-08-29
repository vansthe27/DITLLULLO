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

    $query = "INSERT INTO
            usuarios(Cedula, Nombre, Apellido, Correo, Ocupacion, Estudios, Descripcion, Celular, Telefono, Direccion, Clave)
            VALUES('$cedula', '$nombre', '$apellido', '$correo', '$ocupacion', '$estudios', '$descripcion', '$celular', '$telefono', '$direccion', '$contraseña')";
    $consulta = mysqli_query($conect,$query);

    if ($consulta) {
        echo ("Se inserto el usuario en la Base de Datos a la tabla correspondiente");
        echo "<a href='Login1.php'>Volver</a>";
    }else {
        echo("Hay un error en la Consulta");
    }
}  else{
    echo "ir al formulario";
    echo "<a href='frmUsuarios.php'>Volver</a>";
}
?>