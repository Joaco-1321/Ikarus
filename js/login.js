const login = document.querySelector("#login"),
  registrarse = document.querySelector("#registrarse");

let bit = false;

function cambio() {
  if (bit) {
    login.style.display = "flex";
    registrarse.style.display = "none";
    bit = !bit;
  } else {
    registrarse.style.display = "flex";
    login.style.display = "none";
    bit = !bit;
  }
}
