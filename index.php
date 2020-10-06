<?php
require_once 'classes/square.php';
require_once 'classes/cube.php';

$square = new Square(20);
echo $square->__toString();

$cube = new Cube(10);
echo $cube->__toString();

try {
    $cube1 = new Cube(5);
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

echo $cube1;
