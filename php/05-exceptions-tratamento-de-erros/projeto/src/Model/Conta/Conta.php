<?php

namespace Alura\Banco\Model\Conta;

abstract class Conta {

    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    abstract protected function getTarifaSaque(): float;

    public function saca(float $valorASacar): void {
        $tarifaSaque = $valorASacar * $this->getTarifaSaque();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getNomeTitular(): string {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int {
        return self::$numeroDeContas;
    }
}
