<?php

namespace Alura\Banco\Model\Conta;

class SaldoInsuficienteException extends \DomainException {

	public function __construct(float $valor, float $saldoAtual) {
		$mensagem = "Você tentou sacar $valor, mas tem apenas $saldoAtual em conta." . PHP_EOL;
		parent::__construct($mensagem);
	}

}
