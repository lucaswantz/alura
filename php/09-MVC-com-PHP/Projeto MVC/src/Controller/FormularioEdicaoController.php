<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorHTMLTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioEdicaoController implements InterfaceControladorRequisicao {

	use RenderizadorHTMLTrait;

	/**
	 * @var \Doctrine\Common\Persistence\ObjectRepository
	 */
	private $repositorioCursos = null;

	public function __construct() {
		$entityManager = (new EntityManagerCreator())->getEntityManager();
		$this->repositorioCursos = $entityManager->getRepository(Curso::class);
	}

	public function processaRequisicao(): void {
		$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

		if (is_null($id) || $id === false) {
			header('Location: /listar-cursos');
			return;
		}

		/** @var Curso $curso */
		$curso = $this->repositorioCursos->find($id);

		echo $this->rederizaHtml('cursos/formulario.php', [
			'curso' => $this->repositorioCursos->find($id),
			'titulo' => "Alterar Curso " . $curso->getDescricao(),
		]);
	}

}
