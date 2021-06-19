<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
	$firstStudent = new Student(null, "Silvani Wantz da Motta", new DateTimeImmutable('1974-07-10'));
	$secondStudent = new Student(null, "Adelar Oliveira da Motta", new DateTimeImmutable('1974-07-10'));

	$studentRepository->save($firstStudent);
	$studentRepository->save($secondStudent);

	$connection->commit();
} catch (\PDOException $e) {
	echo $e->getMessage();
	$connection->rollBack();
}

