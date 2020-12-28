<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );

$tabela = $pdo->query('SELECT * FROM students WHERE ID =1;');
$listagem = $tabela->fetch(PDO::FETCH_ASSOC);

var_dump($listagem); exit();




