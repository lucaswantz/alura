<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
	http_response_code(404);
	exit();
}

session_start();

$ehRotaLogin = stripos($caminho, 'login');
if (!isset($_SESSION['logado']) && $ehRotaLogin === false) {
	header('Location: /login');
	exit();
}

$classeControlador = $rotas[$caminho];

/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControlador();
$controlador->processaRequisicao();
