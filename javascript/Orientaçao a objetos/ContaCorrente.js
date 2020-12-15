import { Cliente } from "./Cliente.js";

export class ContaCorrente {
    static numeroDeContas = 0;
    agencia;

    _cliente;
    _saldo = 0;

    set cliente(cliente) {
        if (cliente instanceof Cliente) {
            this._cliente = cliente;
        }
    }

    get cliente() {
        return this._cliente;
    }

    get saldo() {
        return this._saldo;
    }

    constructor(cliente, agencia) {
        this.agencia = agencia;
        this.cliente = cliente;
        ContaCorrente.numeroDeContas++;
    }

    sacar(valorSacar) {
        if (this._saldo < valorSacar) return 0;

        this._saldo -= valorSacar;
        return valorSacar;
    }

    depositar(valorDepositar) {
        if (valorDepositar <= 0) return;

        this._saldo += valorDepositar;
    }

    transferir(valorTransferir, contaDestino) {
        const valorSacado = this.sacar(valorTransferir);
        contaDestino.depositar(valorSacado);
    }
}