<?php


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Conectar a la base de datos
    include("conexion_db/conexiondb.php");

    // Crear una consulta SQL para buscar al usuario por correo electrónico y contraseña
    $sql = "SELECT * FROM clientes WHERE email = '$email' AND contraseña = '$contraseña'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se encontró un usuario con los datos ingresados
    if (mysqli_num_rows($resultado) == 1) {
        // Si se encontró un usuario, permitir el acceso a la página principal
        $r = mysqli_fetch_assoc($resultado);
        $_SESSION['id_cliente'] = $r['id_cliente'];
        $_SESSION['nombre_cliente'] = $r['nombre'];
        $_SESSION['apellido_cliente'] = $r['apellido'];
        $_SESSION['isLoggedIn'] = true; // Establecer la variable de sesión isLoggedIn como true

        if(isset($_GET["rer"])){
            echo '<div class="alert success"><span>Iniciando sesión...</span></div>';
            echo '<script>
                    setTimeout(function(){
                        window.location.href = "reservas.php";
                    }, 3000);
                </script>';
        }else{
            echo '<div class="alert success"><span>Iniciando sesión...</span></div>';
            echo '<script>
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 3000);
                </script>';
        }
        exit();

    } else {
        // Si no se encontró un usuario, mostrar un mensaje de error
        echo "<script>alert('Correo electrónico o contraseña incorrectos.');</script>";
    }

}
?>
