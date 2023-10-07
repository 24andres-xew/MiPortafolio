function calcularCostoTotalEnModal() {
    var nuevaFechaInicio = new Date(document.getElementById('nueva_fecha_inicio').value);
    var nuevaFechaFin = new Date(document.getElementById('nueva_fecha_fin').value);
    var precioDia = parseInt(document.getElementById('precio_dia').value);

    // Verificar si ambas nuevas fechas tienen valor
    if (nuevaFechaInicio && nuevaFechaFin) {
        // Calcular la diferencia en días
        var diferencia = Math.floor((nuevaFechaFin - nuevaFechaInicio) / (1000 * 60 * 60 * 24));

        // Verificar que las fechas sean válidas y la fecha de inicio sea menor a la fecha de fin
        if (diferencia >= 0) {
            // Calcular el costo total
            var costoTotal = diferencia * precioDia;

            var pf = costoTotal * 1000000; // Multiplicar por un millón

            // Mostrar el costo total en el campo de "Nuevo costo total"
            document.getElementById('pf').value = pf; // Formatear como moneda
        } else {
            // Si las fechas no son válidas, mostrar un mensaje de error en el campo de "Nuevo costo total"
            document.getElementById('pf').value = 'Fechas inválidas';
        }
    }
}

// Escuchar eventos de cambio en los campos de fecha en el modal
document.getElementById('nueva_fecha_inicio').addEventListener('input', calcularCostoTotalEnModal);
document.getElementById('nueva_fecha_fin').addEventListener('input', calcularCostoTotalEnModal);


