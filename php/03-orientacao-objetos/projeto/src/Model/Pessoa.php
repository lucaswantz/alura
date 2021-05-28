<?php

namespace Alura\Banco\Model;

class Pessoa {
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->validateNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getNumeroCPF(): string {
        return $this->cpf->getNumero();
    }

    protected function validateNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
