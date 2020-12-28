<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );


$aluno = new Student(
    null,
    "'Thyago Genova4', ''); DROP TABLE students; --",  //SQL INJECTION QUE DESTRUIRÁ A TABELA
    new \DateTimeImmutable('1989-11-26')
);

// modo de preparar contra sql injection

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birth_date);";


$tratamento = $pdo->prepare($sqlInsert);
$tratamento->bindValue(':name',$aluno->name());
$tratamento->bindValue(':birth_date',$aluno->birthDate()->format('Y-m-d'));

if ($tratamento->execute()) {
    echo "sucesso!!!!";
}