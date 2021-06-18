<?php

use Alura\Banco\Model\Conta\{ContaCorrente, SaldoInsuficienteException, Titular};
use Alura\Banco\Model\{CPF, Endereco};

require_once("autoload.php");

$conta = new ContaCorrente(
    new Titular(
        new CPF("008.444.140-26"),
        "Lucas",
        new Endereco("Carlos Barbosa", "Centro", "Rua Dez", "12345")
    )
);

try {
    $conta->deposita(-100);
} catch (\InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo." . PHP_EOL;
}


echo $conta->getSaldo();
