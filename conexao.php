<?php

$databasePath = __dir__ . "banco.sqlite";
$pdo = new PDO('sqlite:'. $databasePath);

echo "conectei";

$pdo->exec('CREATE TABLE students(id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');