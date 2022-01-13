<?php

$rotas = [
	'/listar-cursos' => \Alura\Cursos\Controller\ListarCursosController::class,
	'/novo-curso' => \Alura\Cursos\Controller\FormularioInsercaoController::class,
	'/salvar-curso' => \Alura\Cursos\Controller\PersistenciaController::class,
	'/excluir-curso' => \Alura\Cursos\Controller\ExclusaoController::class,
	'/alterar-curso' => \Alura\Cursos\Controller\FormularioEdicaoController::class,
];

return $rotas;
