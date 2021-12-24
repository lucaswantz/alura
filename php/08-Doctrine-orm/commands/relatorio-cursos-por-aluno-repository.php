<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Repository\AlunoRepository;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

/** @var AlunoRepository */
$alunosRepository = $entityManager->getRepository(Aluno::class);

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

/** @var Aluno[] */
$alunos = $alunosRepository->buscaCursosPorAluno();

foreach ($alunos as $aluno) {
	$telefones = $aluno->getTelefones()->map(function (Telefone $telefone) {
		return $telefone->getNumero();
	})->toArray();

	echo "ID: {$aluno->getId()}\n";
	echo "Nome: {$aluno->getNome()}\n";
	echo "Telefones: " . implode(', ', $telefones) . "\n";

	$cursos = $aluno->getCursos();

	foreach ($cursos as $curso) {
		echo "\tID Curso: {$curso->getId()}\n";
		echo "\tNome Curso: {$curso->getNome()}\n";
		echo "\n";
	}

	echo "\n";
}

echo "\n";
foreach ($debugStack->queries as $query) {
	echo $query['sql'] . "\n";
}
