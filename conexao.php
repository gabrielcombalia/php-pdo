<?php

$pdo =  new  PDO('mysql:host=localhost;dbname=phppdo', 'admin', '222555eee' );

echo "conectado";

$pdo->exec('create table students(id integer auto_increment primary key, name text, birth_date text);');