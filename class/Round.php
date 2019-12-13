<?php

class Round
{
  private $ray;

  public function __construct(int $ray)
  {
    $this->ray = $ray;

  }

  public function perimeter()
  {
    return 2 * pi() * $this->ray;

  }


}
