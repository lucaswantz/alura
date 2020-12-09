class Cliente {
    nome;
    cpj;
}

class ContaCorrente {
    agencia;
    saldo;

    sacar(valor) {
        if (this.saldo >= valor) {
            this.saldo -= valor;
        }
    }
}

const cliente1 = new Cliente();
cliente1.nome = "Lucas Motta";
cliente1.cpj = "008.444.140-26";

const contaCorrenteLucas = new ContaCorrente();
contaCorrenteLucas.agencia = "453";
contaCorrenteLucas.saldo = 100;

contaCorrenteLucas.sacar(200);

console.log(cliente1);
console.log(contaCorrenteLucas);