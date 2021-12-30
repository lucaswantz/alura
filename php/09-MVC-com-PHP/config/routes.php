<?php

$rotas = [
	'/listar-cursos' => \Alura\Cursos\Controller\ListarCursosController::class,
	'/novo-curso' => \Alura\Cursos\Controller\FormularioInsercaoController::class,
	'/salvar-curso' => \Alura\Cursos\Controller\PersistenciaController::class,
];

return $rotas;
