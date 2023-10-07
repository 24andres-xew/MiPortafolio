<?php
//  $host = "localhost"; // nombre del host
//  $user = "root"; // usuario de la base de datos
//  $password = ""; // contraseña de la base de datos
//  $dbname = "alquiler_carros"; // nombre de la base de datos

//  // crear una conexión
//  $conexion = mysqli_connect($host, $user, $password, $dbname);

//  $conexion = new mysqli("localhost", "root", "", "alquiler_carros");
//  if (!$conexion->set_charset("utf8mb4")) {
//    die("Error al establecer la codificación de caracteres: " . $conexion->error);
//  }


$host = "localhost"; // nombre del host
$user = "c1601882_oscar"; // usuario de la base de datos
$password = "keGOtude02"; // contraseña de la base de datos
$dbname = "c1601882_oscar"; // nombre de la base de datos

// crear una conexión
$conexion = mysqli_connect($host, $user, $password, $dbname);

$conexion = new mysqli("localhost", "c1601882_oscar", "keGOtude02", "c1601882_oscar");
if (!$conexion->set_charset("utf8mb4")) {
 die("Error al establecer la codificación de caracteres: " . $conexion->error);
}

?>