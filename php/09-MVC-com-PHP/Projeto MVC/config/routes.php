<?php

use Alura\Cursos\Controller\ExclusaoController;
use Alura\Cursos\Controller\FormularioEdicaoController;
use Alura\Cursos\Controller\FormularioInsercaoController;
use Alura\Cursos\Controller\FormularioLoginController;
use Alura\Cursos\Controller\ListarCursosController;
use Alura\Cursos\Controller\PersistenciaController;
use Alura\Cursos\Controller\RealizarLoginController;
use Alura\Cursos\Controller\RealizarLogoutController;

$rotas = [
	'/listar-cursos' => ListarCursosController::class,
	'/novo-curso' => FormularioInsercaoController::class,
	'/salvar-curso' => PersistenciaController::class,
	'/excluir-curso' => ExclusaoController::class,
	'/alterar-curso' => FormularioEdicaoController::class,
	'/login' => FormularioLoginController::class,
	'/realizar-login' => RealizarLoginController::class,
	'/realizar-logout' => RealizarLogoutController::class,
];

return $rotas;
