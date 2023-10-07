// Función para calcular el costo total
function calcularCostoTotal() {
    var fechaInicio = new Date(document.getElementById('fecha_inicio').value);
    var fechaFin = new Date(document.getElementById('fecha_fin').value);
    var precioDia = parseInt(document.getElementById('precio_dia').value);

    // Calcular la diferencia en días
    var diferencia = Math.floor((fechaFin - fechaInicio) / (1000 * 60 * 60 * 24));

    // Verificar que las fechas sean válidas y la fecha de inicio sea menor a la fecha de fin
    if (diferencia >= 0) {
        // Calcular el costo total
        var costoTotal = diferencia * precioDia;

        var pf = costoTotal * 1000000; // Multiplicar por un millón

        // Mostrar el costo total en una alerta
        // alert('El costo total es: ' + pf);

        // Asignar el valor al campo de entrada con id "pf"
        document.getElementById('pf').value = pf;
    } else {
        // Si las fechas no son válidas, mostrar un mensaje de error en una alerta
        alert('Fechas inválidas');
    }
}

// Escuchar eventos de entrada en los campos de fecha y precio por día
document.getElementById('fecha_inicio').addEventListener('input', calcularCostoTotal);
document.getElementById('fecha_fin').addEventListener('input', calcularCostoTotal);
document.getElementById('precio_dia').addEventListener('input', calcularCostoTotal);

