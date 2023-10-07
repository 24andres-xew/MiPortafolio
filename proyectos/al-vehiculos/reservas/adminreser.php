<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminreservas.css">
    <title>Mis Reservas</title>
    

</head>
<body>
    <header>
    <div class="wrapper">
                <svg>
                    <text x="36%" y="50%" dy=".45em" text-anchor="middle">
                        Mis Reservas
                    </text>
                </svg>
            </div>
        <nav>
            <ul>
                <li>  <a href="../index.php" class="active" >Inicio</a></li>
                <li><a href="../php/close.php">Cerrar Sesión</a></li>    
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <tr>
                <th>ID Reserva</th>
                <th>Cliente</th>
                <th>Vehículo</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Costo Total</th>
                <th>Método de Pago</th>
                <th>Acciones</th>
            </tr>


            <?php include("edi_dele.php"); ?>
        </table>
    </main>

    <div id="editarReservaModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Editar Reserva</h2>
                <form id="editar_form" class="modal-form" method="post" action="">
                    <input type="hidden" name="id_reserva" value="">
                    <label for="nueva_fecha_inicio">Nueva fecha de inicio:</label>
                    <input type="date" name="nueva_fecha_inicio" id="nueva_fecha_inicio">
                    <label for="nueva_fecha_fin">Nueva fecha de fin:</label>
                    <input type="date" name="nueva_fecha_fin" id="nueva_fecha_fin">
                    <input type="hidden" name="precio_dia" id="precio_dia" value="">
                    <label for="nuevo_costo_total">Nuevo costo total:</label>
                    <input type="text" name="nuevo_costo_total" id="pf" readonly>
                    <button type="submit" name="editar" class="pa">Actualizar</button>
                </form>
        </div>
    </div>

    <div id="eliminarReservaModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Eliminar Reserva</h2>
            <form id="eliminar_form" class="modal-form" method="post" action="">
                <input type="hidden" name="id_reserva" value="">
                <p>¿Estás seguro de que deseas eliminar esta reserva?</p>
                <button type="submit" name="eliminar" class="pa">Eliminar</button>
            </form>
        </div>
    </div>

    <script>
        var editarModal = document.getElementById("editarReservaModal");
        var eliminarModal = document.getElementById("eliminarReservaModal");
        var editarClose = editarModal.getElementsByClassName("close")[0];
        var eliminarClose = eliminarModal.getElementsByClassName("close")[0];
        var editarForms = document.getElementsByClassName("editar_form");
        var eliminarForms = document.getElementsByClassName("eliminar_form");

        // Abrir ventana emergente para editar reserva
        function editarReserva(idReserva, costo) {
            var form = document.getElementById("editar_form");
            var fechaInicioInput = document.getElementById("nueva_fecha_inicio");
            var fechaFinInput = document.getElementById("nueva_fecha_fin");
            var precio_dia = document.getElementById("precio_dia");

            // Establecer la fecha mínima como la fecha actual en los elementos de fecha
            var fechaActual = new Date().toISOString().split("T")[0];
            fechaInicioInput.min = fechaActual;
            fechaFinInput.min = fechaActual;

            editarModal.style.display = "block";
            form.id_reserva.value = idReserva;
        
            precio_dia.value =costo;

        }

        // Abrir ventana emergente para eliminar reserva
        function eliminarReserva(idReserva) {
            var form = document.getElementById("eliminar_form");
            eliminarModal.style.display = "block";
            form.id_reserva.value = idReserva;
        }

        // Cerrar ventanas emergentes al hacer clic en el botón de cerrar
        editarClose.onclick = function() {
            editarModal.style.display = "none";
        };

        eliminarClose.onclick = function() {
            eliminarModal.style.display = "none";
        };

        // Cerrar ventanas emergentes al hacer clic fuera de ellas
        window.onclick = function(event) {
            if (event.target == editarModal) {
                editarModal.style.display = "none";
            }

            if (event.target == eliminarModal) {
                eliminarModal.style.display = "none";
            }
        };
    </script>

<script src="../js/reservas/metodopago.js"></script>
</body>
</html>
