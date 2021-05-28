<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa {

    private string $cargo;
    private float $salario;

    public function __construct(CPF $cpf, string $nome, string $cargo, float $salario) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function setNome(string $nome) {
        $this->validateNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento) {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario() {
        return $this->salario;
    }

    public function calculaBonificacao() : float {
        return $this->salario * 0.1;
    }
}
