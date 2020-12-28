<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );

$tabela = $pdo->query('SELECT * FROM students;');

while ($listagem = $tabela->fetch(PDO::FETCH_ASSOC))

$listagem = $tabela->fetchAll(PDO::FETCH_ASSOC);
$listagemObjeto = [];

foreach ($listagem as $dados) {
    $listagemObjeto[] = new Student(
        $dados['id'],
        $dados['name'],
        new \DateTimeImmutable($dados['birth_date'])
    );
}

var_dump($listagemObjeto);

