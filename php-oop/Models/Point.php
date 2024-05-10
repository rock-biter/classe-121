<?php

require_once __DIR__ . '/../Traits/Drawable.php';

class Point
{

  use Drawable;

  public $x;
  public $y;

  function __construct($_x = 0, $_y = 0)
  {
    $this->x = $_x;
    $this->y = $_y;
  }
}
