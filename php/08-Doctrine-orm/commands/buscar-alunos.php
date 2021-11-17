<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
	$telefones = $aluno
		->getTelefones()
		->map(function ($telefone) { 
			return $telefone->getNumero(); 
		})
		->toArray();

	echo "{$aluno->getId()} - {$aluno->getNome()}" . PHP_EOL;
	echo "Telefones: " . implode(" - ", $telefones) . PHP_EOL;
}
