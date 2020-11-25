<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("008.444.140-26", "Lucas Wantz da Motta");
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaTitular()->recuperaNome();
echo $primeiraConta->recuperaTitular()->recuperaCpf();
echo $primeiraConta->recuperaSaldo();

$segundosConta = new Conta("698.549.548-10", "Vinícius Dias");
var_dump($segundaConta);

new Conta("123", "Abcdefgh");
echo Conta::$numeroDeContas;
