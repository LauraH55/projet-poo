<?php

require('class/Square.php');
require('class/Round.php');

$square1 = new Square(10); // instancie la classe // construit un carré de 10
$square2 = new Square(24);

echo 'Le carré a une surface de ', $square1->perimeter();
echo '<br>';
echo 'Le carré a une surface de ', $square2->perimeter();
echo '<br>';
$round1 = new Round(8);
echo 'Le cercle a un périmètre de ', $round1->perimeter();


 ?>
