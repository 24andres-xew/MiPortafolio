
  const text = "Desarrollador Frontend y Backend";
  const speed = 90; // Velocidad de escritura en milisegundos
  const pauseTime = 2000; // Tiempo de pausa en milisegundos
  let i = 0;

  function typeWriter() {
    const typedText = document.getElementById("typed-text");

    function type() {
      if (i < text.length) {
        typedText.textContent += text.charAt(i);
        i++;
        setTimeout(type, speed);
      } else {
        setTimeout(reset, pauseTime); // Hacer una pausa antes de reiniciar
      }
    }

    function reset() {
      typedText.textContent = "";
      i = 0;
      setTimeout(type, 500); // Espera 0.5 segundos antes de empezar de nuevo
    }

    type();
  }

  // Iniciar el efecto de máquina de escribir
  typeWriter();

