<?php

use Alura\Cursos\Controller\FormularioInsercaoController;
use Alura\Cursos\Controller\ListarCursosController;

require __DIR__ . '/../vendor/autoload.php';

switch ($_SERVER["PATH_INFO"]) {
	case '/listar-cursos':
		$controlador = new ListarCursosController();
		$controlador->processaRequisicao();
		break;

	case '/novo-curso':
		$controlador = new FormularioInsercaoController();
		$controlador->processaRequisicao();
		break;

	default:
		echo "ERRO 404";
		break;
}
