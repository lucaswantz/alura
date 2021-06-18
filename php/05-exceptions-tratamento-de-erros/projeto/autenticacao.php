<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(new CPF('008.444.140-26'), 'Lucas Motta', 5000);

$autenticador->tentaLogin($diretor, '1324');