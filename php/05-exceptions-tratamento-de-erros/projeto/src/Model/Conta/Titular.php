<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Autenticavel;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha) : bool {
        return $senha === 'abcd';
    }
}
