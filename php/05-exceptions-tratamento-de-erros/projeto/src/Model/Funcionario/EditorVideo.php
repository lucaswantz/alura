<?php

namespace Alura\Banco\Model\Funcionario;

class EditorVideo extends Funcionario {

    public function calculaBonificacao() : float {
        return $this->recuperaSalario() * 0.05;
    }

}
 