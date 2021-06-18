<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\Titular;

$endereco = new Endereco("Carlos Barbosa", "Centro", "Rua independencia", "1234");
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco("Garibaldi", "Centro", "Rua Republica", "666");
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::getNumeroDeContas();
