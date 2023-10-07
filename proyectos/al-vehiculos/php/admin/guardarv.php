<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Vehículos</title>
    <link rel="stylesheet" href="../../css/editar.css">
</head>
<body>
    <header>
        <h2>Formulario de Inserción de Vehículos</h2>
        <nav>
            <ul>
                <li><a href="../admin/guardarv.php">Inicio</a></li>
                <li><a href="../admin/editar/edit.php">Editar o eliminar </a></li>
            </ul>
        </nav>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br><br>

        <label for="año">Año:</label>
        <input type="number" name="año" required><br><br>

        <label for="placa">Placa:</label>
        <input type="text" name="placa" required><br><br>

        <label for="tipo_combustible">Tipo de Combustible:</label>
        <input type="text" name="tipo_combustible" required><br><br>

        <label for="transmision">Transmisión:</label>
        <input type="text" name="transmision" required><br><br>

        <label for="capacidad">Capacidad:</label>
        <input type="number" name="capacidad" required><br><br>

        <label for="precio_dia">Precio por Día:</label>
        <input type="number" name="precio_dia" step="0.01" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" required><br><br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" accept="image/*" required><br><br>

        <input type="submit" value="guardar" name="guardar">
    </form>
    <?php  require_once'procesarv.php'; ?>
</body>
</html>
