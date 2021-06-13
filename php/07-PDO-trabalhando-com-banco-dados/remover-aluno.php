<?php

require_once('vendor/autoload.php');

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$sqlDelete = "DELETE FROM students WHERE id = ?;";

$statement = $pdo->prepare($sqlDelete);
$statement->bindValue(1, 4, PDO::PARAM_INT);

if($statement->execute()){
	echo "Aluno removido";
}
