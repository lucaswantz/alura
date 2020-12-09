console.log("Trabalhando com listas");

const listaDeDestino = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

const idadeComprador = 15;
const estaAcompanhada = true;
const temPassagemComprada = true;

console.log("Destinos Possíveis");
console.log(listaDeDestino);

// if (idadeComprador >= 18) {
//     console.log("Comprador é maior de idade");
//     listaDeDestino.splice(1, 1); // Removendo item
// } else if (estaAcompanhada) {
//     console.log("Comprador está acompanhado");
//     listaDeDestino.splice(1, 1); // Removendo item
// } else {
//     console.log("Não é maior de idade e não posso vender");
// }

if (idadeComprador >= 18 || estaAcompanhada) {
    console.log("Boa Viagem!");
    listaDeDestino.splice(1, 1); // Removendo item
} else {
    console.log("Não é maior de idade e não posso vender");
}

console.log("\nEmbarque:\n");

if (idadeComprador >= 18 && temPassagemComprada) {
    console.log("Boa Viagem!");
} else {
    console.log("Você não pode embarcar");
}

console.log(listaDeDestino);