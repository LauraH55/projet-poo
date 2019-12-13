<?php
require('class/Shape.php');
require('class/Square.php');
require('class/Round.php');
require('class/Triangle.php');

$square1 = new Square(10); // instancie la classe // construit un carré de 10
$square2 = new Square(24);

echo 'Le carré 1 a un périmètre de ', $square1->perimeter();
echo '<br>';
echo 'Le carré 1 a une surface de ', $square2->perimeter();
echo '<br>';

echo 'Le carré 2 a un périmètre de ', $square1->area();
echo '<br>';
echo 'Le carré 2 a une surface de ', $square2->area();
echo '<br>';

$round1 = new Round(8);
echo 'Le cercle 1 a un périmètre de ', $round1->perimeter();
echo '<br>';
echo 'Le cercle 1 a une surface de ', $round1->area();
echo '<br>';

$triangle1 = new Triangle(9,12,15);
echo 'Le triangle 1 a un périmètre de ', $triangle1->perimeter();
echo '<br>';
echo 'Le triangle 1 a une surface de ', $triangle1->area();
echo '<br>';



 ?>
