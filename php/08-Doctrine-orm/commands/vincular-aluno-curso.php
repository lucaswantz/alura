<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1];
$idCurso = $argv[2];

/** @var Aluno */
$aluno = $entityManager->find(Aluno::class, $idAluno);

/** @var Curso */
$curso = $entityManager->find(Curso::class, $idCurso);

$curso->addAluno($aluno);

$entityManager->flush();
