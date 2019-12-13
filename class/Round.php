<?php

class Round extends Shape
{
  private $ray;

  public function __construct(int $ray, $name)
  {
    $this->ray = $ray;
    parent::__construct($name);

  }

  public function perimeter()
  {
    return 2 * pi() * $this->ray;

  }

  public function area()
  {
    return pi() * ($this->ray * $this->ray); // calcule de l'air
    // pi(*pow($this->ray,2)) autre façon de calculer l'air
  }

}
