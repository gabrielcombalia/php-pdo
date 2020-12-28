<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );

$preparado = $pdo->prepare('DELETE FROM students WHERE ID= ?;');
$preparado->bindValue(1,4,PDO::PARAM_INT);
var_dump($preparado->execute());

$preparado->bindValue(1,5,PDO::PARAM_INT);
var_dump($preparado->execute());