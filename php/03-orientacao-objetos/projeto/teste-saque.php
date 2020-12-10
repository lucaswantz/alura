<?php

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

require_once("autoload.php");

$conta = new ContaPoupanca(
    new Titular(
        new CPF("008.444.140-26"),
        "Lucas",
        new Endereco("Carlos Barbosa", "Centro", "Rua Dez", "12345")
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->getSaldo();