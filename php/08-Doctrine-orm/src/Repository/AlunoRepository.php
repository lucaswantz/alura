<?php

namespace Alura\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository {

	public function buscaCursosPorAluno() {
		$query = $this->createQueryBuilder('a')->leftJoin('a.telefones', 't')->leftJoin('a.cursos', 'c')->addSelect('t', 'c')->getQuery();
		return $query->getResult();
	}
}
