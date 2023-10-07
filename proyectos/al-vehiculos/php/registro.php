<?php
include("conexion_db/conexiondb.php");

// Recibimos los datos del formulario
if (isset($_POST["registrar"])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    
    // Comprobar si el cliente ya está registrado
    $sql = "SELECT * FROM clientes WHERE cedula = '$cedula'";
    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        echo '<div class="alert danger"><span class="closebtn" onclick="cerrarAlerta()">&times;</span>Este cliente ya está registrado.</div>';
    } else {
        // Si el cliente no está registrado, almacenar su información en la base de datos y permitir el envío del formulario
        $sql = "INSERT INTO clientes (nombre, apellido, cedula, telefono, email, contraseña) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$email', '$contraseña')";
        // Ejecutamos la consulta
        if (mysqli_query($conexion, $sql)) {
            echo '<div class="alert success"><span class="closebtn" onclick="cerrarAlerta()">&times;</span>Registro de cliente exitoso.</div>';
        } else {
            echo '<div class="alert danger"><span class="closebtn" onclick="cerrarAlerta()">&times;</span>Error al insertar el cliente: ' . mysqli_error($conexion) . '</div>';
        }
    }
    
    // Cerramos la conexión a la base de datos
    mysqli_close($conexion);
}
?>



