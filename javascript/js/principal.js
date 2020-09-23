var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida Nutricionista";

var paciente = document.querySelector("#primeiro-paciente");

var tdPeso = paciente.querySelector(".info-peso");
var peso = tdPeso.textContent;

var tdAltura = paciente.querySelector(".info-altura");
var altura = tdAltura.textContent;

var tdImc = paciente.querySelector(".info-imc");

var pesoEhValido = true;
var alturaEhValido = true;

if (peso <= 0 || peso >= 1000) {
    tdImc.textContent = "Peso inválido";
    pesoEhValido = false;
}

if (altura <= 0 || altura >= 3) {
    tdImc.textContent = "Altura inválido";
    alturaEhValido = false;
}

if (pesoEhValido && alturaEhValido) {
    var imc = peso / (altura * altura);
    tdImc.textContent = imc;
} else {
    tdImc.textContent = "Altura e/ou peso inválidos!";
}
