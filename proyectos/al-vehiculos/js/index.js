const text = document.querySelector(".text-two");

const textType = () => {
  setTimeout(() => {
    text.textContent = "Reserva Ahora";
  }, 0);

  setTimeout(() => {
    text.textContent = "Carros de Lujo";
  }, 4000);

  setTimeout(() => {
    text.textContent = "Motos de lujo";
  }, 8000);

//   setTimeout(() => {
//     text.textContent = "Motos de Lujo";
//   }, 8000);
};

textType();
setInterval(textType, 12000);