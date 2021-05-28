<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umDesenvolvedor = new Desenvolvedor(new CPF('123.456.789-10'), 'Lucas Motta', 'Desenvolvedor', 1000);
$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(new CPF('987.654.321-10'), 'Géssica Grolli', 'Gerente', 2000);
$umDiretor = new Diretor(new CPF('987.654.321-10'), 'Bruno Motta', 'Diretor', 5000);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();
