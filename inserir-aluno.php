<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );


$aluno = new Student(null, 'Thyago Genova', new \DateTimeImmutable('1982-11-26'));

$nome = $aluno->name();
$aniversario = $aluno->birthDate()->format('Y-m-d');

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$nome}','{$aniversario}');";


var_dump($pdo->exec($sqlInsert));