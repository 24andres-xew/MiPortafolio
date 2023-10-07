<?php
include("../../conexion_db/conexiondb.php");

if(isset( $_POST['guardar'])){
// Obtener valores del formulario
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$año = $_POST['año'];
$placa = $_POST['placa'];
$tipo_combustible = $_POST['tipo_combustible'];
$transmision = $_POST['transmision'];
$capacidad = $_POST['capacidad'];
$precio_dia = $_POST['precio_dia'];
$color = $_POST['color'];

// Procesar imagen
$imagen = $_FILES['imagen']['name'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];
$imagen_path = "img/" . $imagen;
move_uploaded_file($imagen_tmp, $imagen_path);

// Consulta SQL para insertar en la tabla 'vehiculos'
$sql = "INSERT INTO vehiculos (modelo, marca, año, placa, tipo_combustible, transmision, capacidad, precio_dia, color, imagen)
VALUES ('$modelo', '$marca', $año, '$placa', '$tipo_combustible', '$transmision', $capacidad, $precio_dia, '$color', '$imagen_path')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert('Vehículo guardado exitosamente.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();


}
?>
