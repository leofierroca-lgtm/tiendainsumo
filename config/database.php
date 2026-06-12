<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$bd = "pruebabd";
$port = 3306;

try{

$conn = new mysqli($host, $user, $password, $bd, $port);
catch (mysqli_connect_error $e){
if($conn->connect_error){
    die("Error de Conexion: " . $conn->connect_error);
}
}

?>