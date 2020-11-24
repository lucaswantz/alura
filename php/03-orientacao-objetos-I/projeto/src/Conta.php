<?php

class Conta {

	public string $cpfTitular;
	public string $nomeTitular;
	public float $saldo;

	public function sacar(float $valorSacado): void {
		if ($valorSacado > $this->saldo) {
			echo "Saldo não definido";
		} else {
			$this->saldo -= $valorSacado;
		}
	}

	public function depositar(float $valorDepositado): void {
		if ($valorDepositado < 0) {
			echo "Valor depositado precisa ser positivo";
		} else {
			$this->saldo += $valorDepositado;
		}
	}

}
