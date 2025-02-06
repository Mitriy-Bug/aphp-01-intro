<?php
declare(strict_types=1);

require_once "Student.php";
require_once "Car.php";
require_once "TV.php";

use Student\Student;
use Car\Car;
use TV\TV;

$student = new Student();
$student->addListStudents('Дмитрий', 'Денисов');
$student->addListStudents('Иван', 'Петров');
$student->getListStudents();

$car = new Car();
$car->addListCars('Жигули', 'Красный', 535);
$car->addListCars('BMW', 'Белый', 444);
$car->getListCars();

$tv = new TV();
$tv->addListTv();
$tv->addListTv('POLAR', 10);
$tv->getListTv();