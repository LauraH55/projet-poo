<?php


class Square
{
  const NB_SIDE = 4;

  private $side;

  public function __construct(int $side)
  {
    $this->side = $side;


  }

  public function perimeter()
  {
    return $this->side*self::NB_SIDE;

  }

  public function area()
  {
    return $this->side * $this->side;
  }

}
