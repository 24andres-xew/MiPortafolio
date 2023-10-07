<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css">

    <link rel="stylesheet" href="css/reservas.css">
    <title>Reservas</title>
</head>
<body>
    <header>
            <div class="wrapper">
                <svg>
                    <text x="48%" y="50%" dy=".45em" text-anchor="middle">
                        Reservar Vehículo
                    </text>
                </svg>
            </div>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Inicio</a></li>
                <li><a href="reservas/adminreser.php">Mis Reservas</a></li>
                <li><a href="php/close.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form method="post">

    
            <article class="cliente">
                <p> Cliente: <?php echo $_SESSION['nombre_cliente'];?>
                <?php echo $_SESSION['apellido_cliente'];?> </p>
                
                <section>
                    <?php if (isset($_SESSION['marca_vehiculo']) && isset($_SESSION['modelo_vehiculo']) && isset($_SESSION['placa_vehiculo']) && isset($_SESSION['precio_vehiculo'])): ?>
                    <p>Vehículo:<?php echo $_SESSION['marca_vehiculo']; ?> <?php echo $_SESSION['modelo_vehiculo']; ?> (Placa: <?php echo $_SESSION['placa_vehiculo']; ?>) </p>
                    <p>(Precio: <?php echo   $_SESSION['precio_vehiculo'] ?>)</p>
                    <?php endif; ?>
                </section>
            </article>
        
        

            <input type="hidden" id="id_vehiculo" name="id_vehiculo" value="<?php echo $_SESSION['id_vehiculo']; ?>">
            <article class="monastery">
                    
            <section>
                    <div>
                        <label for="fecha_inicio">Fecha de inicio:</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                    </div>

                    <div>
                        <label for="fecha_fin">Fecha de fin:</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" required>
                    </div>
            </section>
               
            <section>
                    
                    <input type="hidden" id="precio_dia" name="precio_dia" value="<?php echo   $_SESSION['precio_vehiculo'] ?>">
                    
                    <div>
                        <label for="costo_total">Costo total:</label>
                        <input type="text" name="costo_total" id="pf" readonly>
                    </div>

                    <div>
                        <label for="id_metodo_pago">Método de pago:</label>
                            <select id="id_metodo_pago" name="id_metodo_pago" required onchange="mostrarVentanaEmergente()">
                                <option value="1">Tarjeta de crédito</option>
                                <option value="2">Transferencia bancaria</option>
                                <option value="3">Tarjeta de Nequi</option>
                                <option value="4">Tarjeta de Débito</option>
                            </select>

                            <!-- Ventana emergente para los datos de pago -->
                        <div id="ventana-emergente">
                            <div id="ventana-emergente-content">
                                <span class="cerrar-ventana" onclick="ocultarVentanaEmergente()">&times;</span>
                                <h2>Ingrese los datos de pago:</h2>

                                <div class="input-icon">
                                    <i class="fas fa-credit-card"></i>
                                    <input type="text" id="numero_tarjeta" placeholder="Número de tarjeta">
                                </div>

                                <div class="input-icon">
                                    <i class="far fa-calendar-alt"></i>
                                    <input type="text" id="fecha_vencimiento" placeholder="Fecha de vencimiento">
                                </div>

                                <div class="input-icon">
                                    <i class="fas fa-lock"></i>
                                    <input type="text" id="codigo_seguridad" placeholder="Código de seguridad">
                                </div>

                                <button id="btn_pagar" type="submit" name="reservar" class="btn">Pagar</button>

                                <div class="metodos-pago-icons">
                                    <i class="fab fa-cc-visa visa"></i>
                                    <i class="fab fa-cc-mastercard mastercard"></i>
                                    <i class="fab fa-cc-paypal paypal"></i>
                                    <!-- Agrega más iconos de métodos de pago si es necesario -->
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                    
        </form>
    </main>

<?php 
include("php/misreservas.php");
?>


</body>

    <!--fecha de inicio-->
    <script>
            // Obtener la fecha actual
            var fechaActual = new Date().toISOString().split('T')[0];

            // Establecer la fecha mínima en los campos de entrada de tipo date
            document.getElementById('fecha_inicio').setAttribute('min', fechaActual);
            document.getElementById('fecha_fin').setAttribute('min', fechaActual);
    </script>

    <!--iconos-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <!--tarjeta-->
    <script>
        function mostrarVentanaEmergente() {
            var metodoPagoSelect = document.getElementById("id_metodo_pago");
            var metodoPagoValue = metodoPagoSelect.options[metodoPagoSelect.selectedIndex].value;
            
            if (metodoPagoValue === "1" || metodoPagoValue === "2" || metodoPagoValue === "3" || metodoPagoValue === "4") {
                document.getElementById("ventana-emergente").classList.add("mostrar");
            } else {
                document.getElementById("ventana-emergente").classList.remove("mostrar");
            }
        }

        function ocultarVentanaEmergente() {
            document.getElementById("ventana-emergente").classList.remove("mostrar");
        }
    </script>

    <script src="js/metododepago.js"></script>
</html>
