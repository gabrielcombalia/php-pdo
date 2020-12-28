<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );

$tabela = $pdo->query('SELECT * FROM students;');

while ($dados = $tabela->fetch(PDO::FETCH_ASSOC)) {

    $aluno = new Student(
        $dados['id'],
        $dados['name'],
        new \DateTimeImmutable($dados['birth_date'])
    );

    echo $aluno->age().PHP_EOL;

}

