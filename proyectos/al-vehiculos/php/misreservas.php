<?php

if (!isset($_SESSION['id_cliente'])) {
        header("location: ../registerlogin.php");
        exit();
    }

include("conexion_db/conexiondb.php");

// Verificar si el formulario ha sido enviado
if (isset($_POST['reservar'])) {
    // Obtener los valores del formulario
    $id_cliente = $_SESSION['id_cliente'];
    $id_vehiculo = $_POST['id_vehiculo'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $costo_total = $_POST['costo_total'];
    $id_metodo_pago = $_POST['id_metodo_pago'];

    // Crear la consulta SQL para insertar los datos en la tabla de reservas
    $sql = "INSERT INTO reservas (id_cliente, id_vehiculo, fecha_inicio, fecha_fin, costo_total, id_metodo_pago)
            VALUES ('$id_cliente', '$id_vehiculo', '$fecha_inicio', '$fecha_fin', '$costo_total', '$id_metodo_pago')";

    // Ejecutar la consulta SQL
    if (mysqli_query($conexion, $sql)) {
        echo "<div style='background-color: #4CAF50; color: white; text-align: center; font-size: 18px; padding: 10px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;'>Reserva creada exitosamente.</div>";
        echo "<script>setTimeout(function(){location.href='reservas.php'} , 3000);</script>";
    } else {
        echo "<div style='background-color: #f44336; color: white; text-align: center; font-size: 18px; padding: 10px; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;'>Error al crear la reserva: " . mysqli_error($conexion) . "</div>";
        echo "<script>setTimeout(function(){location.href='reservas.php'}, 7000);</script>";
    }
}

mysqli_close($conexion);
?>
