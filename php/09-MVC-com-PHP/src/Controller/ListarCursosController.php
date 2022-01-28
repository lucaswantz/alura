<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorHTMLTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursosController implements InterfaceControladorRequisicao {

	use RenderizadorHTMLTrait;

	private $repositorioDeCursos;

	public function __construct() {
		$entityManager = (new EntityManagerCreator())->getEntityManager();
		$this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
	}

	public function processaRequisicao(): void {
		echo $this->rederizaHtml('cursos/listar-cursos.php', [
				'cursos' => $this->repositorioDeCursos->findAll(),
				'titulo' => 'Lista de Cursos'
			]
		);
	}
}
