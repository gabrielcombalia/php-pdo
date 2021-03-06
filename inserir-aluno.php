<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );


$aluno = new Student(
    null,
    "'Thyago Genova', ''); DROP TABLE students; --",  //SQL INJECTION QUE DESTRUIRÁ A TABELA
    new \DateTimeImmutable('1982-11-26')
);



$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?,?);";

$tratamento = $pdo->prepare($sqlInsert);
$tratamento->bindValue(1,$aluno->name());
$tratamento->bindValue(2,$aluno->birthDate()->format('Y-m-d'));

var_dump($pdo->exec($sqlInsert));