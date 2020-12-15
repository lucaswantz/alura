import { Cliente } from './Cliente.js';
import { ContaCorrente } from './ContaCorrente.js';

const cliente1 = new Cliente("Lucas Motta", 88844411122);
const cliente2 = new Cliente("Gessica Grolli", 11122233344);

const contaCorrenteLucas = new ContaCorrente(cliente1, "453");
contaCorrenteLucas.depositar(500);

const conta2 = new ContaCorrente(cliente2, "102");
contaCorrenteLucas.transferir(200, conta2);

console.log(contaCorrenteLucas);
console.log(conta2);

console.log(ContaCorrente.numeroDeContas);