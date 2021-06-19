<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once('vendor/autoload.php');

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);

$studentList = $repository->allStudents();

var_dump($studentList);

// $statement = $pdo->query('SELECT * FROM students');
// $studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);

// $studentList = [];

// foreach ($studentDataList as $studentData) {
// 	$studentList[] = new Student($studentData["id"], $studentData["name"], new DateTimeImmutable($studentData["birth_date"]));
// }

// var_dump($studentList);

// $statement = $pdo->query('SELECT * FROM students');

// while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)) {
// 	$student = new Student($studentData["id"], $studentData["name"], new DateTimeImmutable($studentData["birth_date"]));

// 	echo $student->age() . PHP_EOL;
// }
