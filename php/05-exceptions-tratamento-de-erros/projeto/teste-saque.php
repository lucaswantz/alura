<?php

use Alura\Banco\Model\Conta\{ContaPoupanca, SaldoInsuficienteException, Titular};
use Alura\Banco\Model\{CPF, Endereco};

require_once("autoload.php");

$conta = new ContaPoupanca(
    new Titular(
        new CPF("008.444.140-26"),
        "Lucas",
        new Endereco("Carlos Barbosa", "Centro", "Rua Dez", "12345")
    )
);

$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo $exception->getMessage();
}

echo $conta->getSaldo();
