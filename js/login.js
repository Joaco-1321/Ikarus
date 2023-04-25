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

function contrasena(){
  let valuePass = document.getElementById("contraseña");
  let minus = document.getElementById("minuscula");
  let mayus = document.getElementById("mayuscula");
  let digitos = document.getElementById("dosseguidos");
  let signos = document.getElementById("signo");
  let longitud = document.getElementById("longitud");

  let minusculas = /[a-z]/g;
  if(valuePass.value.match(minusculas)){
    minus.classList.remove("incorrecto");
    minus.classList.add("correcto");
  } else {
    minus.classList.remove("correcto");
    minus.classList.add("incorrecto");
  }

  let mayusculas = /[A-Z]/g;
  if(valuePass.value.match(mayusculas)){
    mayus.classList.remove("incorrecto");
    mayus.classList.add("correcto");
  } else {
    mayus.classList.remove("correcto");
    mayus.classList.add("incorrecto");
  }

  let digito = /\d{2}/g;
  if(valuePass.value.match(digito)){
    digitos.classList.remove("incorrecto");
    digitos.classList.add("correcto");
  } else {
    digitos.classList.remove("correcto");
    digitos.classList.add("incorrecto");
  }

  let signoss = /[-.+_@]/g;
  if(valuePass.value.match(signoss)){
    signos.classList.remove("incorrecto");
    signos.classList.add("correcto");
  } else {
    signos.classList.remove("correcto");
    signos.classList.add("incorrecto");
  }
  
  if(valuePass.value.length >= 10){
    longitud.classList.remove("incorrecto");
    longitud.classList.add("correcto");
  } else {
    longitud.classList.remove("correcto");
    longitud.classList.add("incorrecto");
  }

}