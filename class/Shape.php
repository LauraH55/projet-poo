<?php


abstract class Shape // classe abstraite qu'on ne peux pas instancier
{
  protected $name; // tous les symboles auront un nom
  const UNIT = ' cm';

  abstract public function perimeter();
  abstract public function area();

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function displayPerimeter()
  {
    echo "Le " . $this->name. " a un périmètre de " .
      $this->perimeter() . self::UNIT;
  }

  public function displayArea()
  {
    echo "Le " . $this->name. " a une surface de " .
      $this->area() . self::UNIT;
  }
}
