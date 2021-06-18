<?php

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\EditorVideo;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\ControladorDeBonificacoes;

$controlador = new ControladorDeBonificacoes();

$umDesenvolvedor = new Desenvolvedor(new CPF('123.456.789-10'), 'Lucas Motta', 1000);
$umEditorVideo = new EditorVideo(new CPF('987.654.321-10'), 'Adelar Motta', 2000);
$umGerente = new Gerente(new CPF('987.654.321-10'), 'Géssica Grolli', 3000);
$umDiretor = new Diretor(new CPF('987.654.321-10'), 'Bruno Motta', 5000);

$umDesenvolvedor->sobeDeNivel();

$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditorVideo);
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();
