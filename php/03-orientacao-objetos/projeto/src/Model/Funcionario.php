<?php

namespace Alura\Banco\Model;

class Funcionario extends Pessoa {

    private string $cargo;

    public function __construct(CPF $cpf, string $nome, string $cargo) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function setNome(string $nome) {
        $this->validateNomeTitular($nome);
        $this->nome = $nome;
    }
}