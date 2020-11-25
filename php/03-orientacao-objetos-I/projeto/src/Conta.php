<?php

class Conta {

	private Titular $titular;
	private float $saldo;
	public static $numeroDeContas = 0;

	public function __construct(string $cpfTitular, string $nomeTitular) {
		$this->titular = new Titular($cpfTitular, $nomeTitular);
		$this->saldo = 0;

		self::$numeroDeContas++;
	}

	public function __destruct() {
		self::$numeroDeContas--;
	}

	public function saca(float $valorSacado): void {
		if ($valorSacado > $this->saldo) {
			echo "Saldo não definido";
			return;
		}

		$this->saldo -= $valorSacado;
	}

	public function deposita(float $valorDepositado): void {
		if ($valorDepositado < 0) {
			echo "Valor depositado precisa ser positivo";
			return;
		}

		$this->saldo += $valorDepositado;
	}

	public function transfere(float $valorTransferido, Conta $contaDestino): void {
		if ($valorTransferido > $this->saldo) {
			echo "Saldo indisponivel";
			return;
		}

		$this->saca($valorTransferido);
		$contaDestino->deposita($valorTransferido);
	}

	public function recuperaTitular(): Titular {
		return $this->titular;
	}

	public function recuperaSaldo(): float {
		return $this->saldo;
	}

	public static function recuperaNumeroDeContas(): int {
		return self::$numeroDeContas;
	}

}
