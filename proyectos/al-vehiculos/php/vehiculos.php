<?php

session_start();


if (isset($_POST['vehiculo'])) {
    // Conectar a la base de datos
    include("../conexion_db/conexiondb.php");


    // Recibir los datos del vehículo enviado por formulario
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $año = $_POST['año'];
    $placa = $_POST['placa'];
    $tipo_combustible = $_POST['tipo_combustible'];
    $transmision = $_POST['transmision'];
    $capacidad = $_POST['capacidad'];
    $precio_dia = $_POST['precio_dia'];
    $color = $_POST['color'];
    $id_vehiculo = $_POST['id_vehiculo'];


    // Insertar los datos del vehículo en la base de datos
    $sql = "INSERT INTO vehiculos (modelo, marca, año, placa, tipo_combustible, transmision, capacidad, precio_dia, color) 
            VALUES ('$modelo', '$marca', '$año', '$placa', '$tipo_combustible', '$transmision', '$capacidad', '$precio_dia', '$color')";

            if (mysqli_query($conexion, $sql)) {
                // Obtener el ID del vehículo recién insertado
                $id_vehiculo = mysqli_insert_id($conexion);

                // Almacenar los datos relevantes del vehículo en la sesión
                $_SESSION['id_vehiculo'] = $id_vehiculo;
                $_SESSION['marca_vehiculo'] = $marca;
                $_SESSION['modelo_vehiculo'] = $modelo;
                $_SESSION['placa_vehiculo'] = $placa;
                $_SESSION['precio_vehiculo'] = $precio_dia;


                if(!isset($_SESSION['id_cliente'])){
                    header("location: ../registerlogin.php?rer");
                }else{
                    echo "<script> alert('Reserva en Proceso'); </script>";
                    echo "<script>window.location.href='../reservas.php'</script>"; 
                }// Enviar respuesta a formulario indicando que la inserción fue exitosa
            } else {
                echo "error"; // Enviar respuesta a formulario indicando que la inserción falló
            }

    mysqli_close($conexion); // Cerrar conexión a la base de datos
}

?>
