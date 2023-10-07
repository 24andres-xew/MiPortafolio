<?php

include("../conexion_db/conexiondb.php");
// Editar una reserva
if (isset($_POST['editar'])) {
    $id_reserva = $_POST['id_reserva'];
    $nueva_fecha_inicio = $_POST['nueva_fecha_inicio'];
    $nueva_fecha_fin = $_POST['nueva_fecha_fin'];
    $nuevo_costo_total = $_POST['nuevo_costo_total'];
    // $precio_dia = $_SESSION['precio_vehiculo']; // Usar el precio del vehículo de la sesión

    // Consulta SQL para actualizar la reserva con las nuevas fechas y el nuevo costo total
    $query = "UPDATE reservas SET fecha_inicio = '$nueva_fecha_inicio', fecha_fin = '$nueva_fecha_fin', costo_total = '$nuevo_costo_total' WHERE id_reserva = '$id_reserva'";

    $result = mysqli_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "<script>alert('Reserva actualizada correctamente.');</script>";
        echo "<script>window.location.href = 'adminreser.php';</script>";
    } else {
        echo "Error al actualizar la reserva: " . mysqli_error($conexion);
    }
}



// Eliminar una reserva
if (isset($_POST['eliminar'])) {
    $id_reserva = $_POST['id_reserva'];

    // Consulta SQL para eliminar la reserva
    $query = "DELETE FROM reservas WHERE id_reserva = '$id_reserva'";

    $result = mysqli_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "<script>alert('Reserva eliminada correctamente.');</script>";
        echo "<script>window.location.href = 'adminreser.php';</script>";
    } else {
        echo "<script> alert('Error al eliminar la reserva.');</script>" . mysqli_error($conexion);
    }
}

// Consulta para obtener las reservas del cliente actual
$id_cliente = $_SESSION['id_cliente'];
$query = "SELECT v.precio_dia,r.id_reserva, c.nombre, c.apellido, v.marca, v.modelo, r.fecha_inicio, r.fecha_fin, r.costo_total, mp.nombre_metodo_pago
          FROM reservas r 
          INNER JOIN clientes c ON r.id_cliente = c.id_cliente
          INNER JOIN vehiculos v ON r.id_vehiculo = v.id_vehiculo
          INNER JOIN metodo_pago mp ON r.id_metodo_pago = mp.id_metodo_pago
          WHERE r.id_cliente = '$id_cliente'";

$result = mysqli_query($conexion, $query);

// Verificar si la consulta fue exitosa
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td><?php echo $row['id_reserva']; ?></td>
            <td><?php echo $row['nombre'] . " " . $row['apellido']; ?></td>
            <td><?php echo $row['marca'] . " " . $row['modelo']; ?></td>
            <td><?php echo $row['fecha_inicio']; ?></td>
            <td><?php echo $row['fecha_fin']; ?></td>
            <td><?php echo $row['costo_total']; ?></td>
            <td><?php echo $row['nombre_metodo_pago']; ?></td>
            <td>
                <section>
                <button class="boton" onclick="editarReserva(<?php echo $row['id_reserva']; ?>, <?php echo intval($row['precio_dia']); ?>)">
                <span> Editar</span></button>
                <button class="boton" onclick="eliminarReserva(<?php echo $row['id_reserva']; ?>)">
                <span>Eliminar</span> </button>
                </section>
            </td>
        </tr>
        <?php
    }
} else {
    echo "<script>alert('No se encontraron resultados.'); 
        window.location.href = '../index.php';
    </script>";
}
?>
