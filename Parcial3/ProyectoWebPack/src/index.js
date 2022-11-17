import Swal from "sweetalert2";

const btnAlerta = document.querySelector(".btnAlerta");

btnAlerta.addEventListener("click", () => {
  Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Algo Salio Mal!",
    footer: '<a href="">Por que ocurrio este problema?</a>',
  });
});
