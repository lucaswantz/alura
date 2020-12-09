console.log("Trabalhando com listas");

// const salvador = "Salvador";
// const saoPaulo = "São Paulos";
// const rioDeJaneiro = "Rio de Janeiro";

const listaDeDestino = new Array(
    "Salvador",
    "São Paulo",
    "Rio de Janeiro"
);

listaDeDestino.push("Curitiba"); // Adicionando um item na lista

console.log("Destinos Possíveis");
console.log(listaDeDestino);

listaDeDestino.splice(1, 1);
console.log(listaDeDestino);

console.log(listaDeDestino[1], listaDeDestino[0]);