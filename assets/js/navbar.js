const hemberger = document.querySelector(".hemberger");

hemberger.addEventListener("click", function () {
  console.log("ok");
  let navbar = document.querySelector(".nav-bar");
  navbar.classList.toggle("active");
});
