console.log("\nTrabalhando com loops");

const listaDeDestino = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

let temPassagemComprada = false;
const destino = "Salvador";
const idadeComprador = 15;
const estaAcompanhada = true;

console.log("\nDestinos Possíveis");
console.log(listaDeDestino);

const podeComprar = idadeComprador >= 18 || estaAcompanhada;

let contador = 0;
let destinoExiste = false;

// while (contador < 3) {
//     if (listaDeDestino[contador] == destino) {
//         destinoExiste = true;
//         console.log("Destino existe");
//         break;
//     }

//     contador++;
// }

for (let i = 0; i < 3; i++) {
    if (listaDeDestino[i] == destino) {
        destinoExiste = true;
        break;
    }
}

console.log("Destino existe: ", destinoExiste);

if (podeComprar && destinoExiste) {
    console.log("Boa Viagem");
} else {
    console.log("Desculpe, tivemos um erro!");
}