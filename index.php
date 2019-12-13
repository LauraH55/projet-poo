<?php
require('class/Shape.php');
require('class/Square.php');
require('class/Round.php');
require('class/Triangle.php');

$square1 = new Square(10); // instancie la classe // construit un carré de 10
$square2 = new Square(24);

echo 'Le carré a une surface de ', $square1->perimeter();
echo '<br>';
echo 'Le carré a une surface de ', $square2->perimeter();
echo '<br>';
echo 'Le carré a une aire de ', $square1->area();
echo '<br>';
echo 'Le carré a une aire de ', $square2->area();
echo '<br>';
$round1 = new Round(8);
echo 'Le cercle a un périmètre de ', $round1->perimeter();
echo '<br>';
echo 'Le cercle a une aire de ', $round1->area();
echo '<br>';
$triangle1 = new Triangle(9,12,15);
echo 'Le triangle a un périmètre de ', $triangle1->perimeter();
echo '<br>';
echo 'Le triangle a un aire de ', $triangle1->area();



 ?>
