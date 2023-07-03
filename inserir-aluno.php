<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __dir__ . "banco.sqlite";
$pdo = new PDO('sqlite:'. $databasePath);

$student = new Student(null,'Eduardo Braz', new DateTimeImmutable('2000-01-09'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));