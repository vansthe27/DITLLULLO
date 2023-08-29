<?php
$servername = "localhost";
$username = "root";
$password = "bateria10";
$dbname = "ditluloservices";
// Se crea la conexión
$conect = mysqli_connect($servername, $username, $password, $dbname);
if ($conect ->connect_error) {
    die("Connection failed: " . $conect->connect_error);
}
?>