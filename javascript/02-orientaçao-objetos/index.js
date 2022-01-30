import { Cliente } from "./Cliente.js";
import { ContaCorrente } from "./Conta/ContaCorrente.js";
import { ContaPoupanca } from "./Conta/ContaPoupanca.js";
import { ContaSalario } from "./Conta/ContaSalario.js";

const cliente = new Cliente("Ricardo", 11122233309);

const contaCorrenteRicardo = new ContaCorrente(cliente, 1001);
const contaPoupanca = new ContaPoupanca(50, cliente, 1001);
const contaSalario = new ContaSalario(cliente);

console.log(contaSalario);
