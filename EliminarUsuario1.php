<?php
include 'Conexion.php';

$cedula=$_GET['Codigo'];
$delete="DELETE FROM usuarios WHERE Cedula='$cedula'";
$consulta= mysqli_query($conect, $delete);

if ($consulta){
    header("location: MostrarUsuarios.php");

}else{
    echo" <script> alert ('Ha sucedido un error');
    location.href='MostrarUsuarios.php';
    /<script>";
}