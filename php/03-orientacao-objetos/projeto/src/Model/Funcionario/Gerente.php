<?php

namespace Alura\Banco\Model\Funcionario;

class Gerente extends Funcionario {

    public function calculaBonificacao() : float {
        return $this->recuperaSalario();
    }
}
