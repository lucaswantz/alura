<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessoa;

abstract class Funcionario extends Pessoa {

    private float $salario;

    public function __construct(CPF $cpf, string $nome, float $salario) {
        parent::__construct($nome, $cpf);
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

    abstract public function calculaBonificacao() : float;
}
