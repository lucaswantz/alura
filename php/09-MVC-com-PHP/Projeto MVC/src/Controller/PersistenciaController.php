<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class PersistenciaController implements InterfaceControladorRequisicao {

	use FlashMessageTrait;

	/**
	 * @var \Doctrine\ORM\EntityManager
	 */
	private $entityManager;

	public function __construct() {
		$this->entityManager = (new EntityManagerCreator())->getEntityManager();
	}

	public function processaRequisicao(): void {
		$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

		$curso = new Curso();
		$curso->setDescricao($descricao);

		$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

		$mensagem = "";

		if (!is_null($id) && $id !== false) {
			$curso->setId($id);
			$this->entityManager->merge($curso);
			$mensagem = "Curso atualizado com sucesso";
		} else {
			$this->entityManager->persist($curso);
			$mensagem = "Curso inserido com sucesso";
		}

		$this->entityManager->flush();
		$this->defineMensagem("success", $mensagem);

		header("Location: /listar-cursos", true, 302);
	}
}
