<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getCpf(): string {
        return $this->cpf->getNumero();
    }

    public function getNome(): string {
        return $this->nome;
    }
}
