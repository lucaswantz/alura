<?php

namespace Alura\Banco\Model\Conta;

class ContaPoupanca extends Conta{

    protected function getTarifaSaque(): float {
        return 0.03;
    }

}