import { Cliente } from './Cliente.js';
import { ContaCorrente } from './ContaCorrente.js';

const cliente1 = new Cliente();
cliente1.nome = "Lucas Motta";
cliente1.cpj = "008.444.140-26";

const contaCorrenteLucas = new ContaCorrente();
contaCorrenteLucas.agencia = "453";

contaCorrenteLucas.depositar(-100);
contaCorrenteLucas.depositar(100);
contaCorrenteLucas.depositar(100);

const valorSacado = contaCorrenteLucas.sacar(50);

console.log(valorSacado);
console.log(contaCorrenteLucas);