<?php

require_once __DIR__ . '/../Traits/Drawable.php';

class Rect
{
  public $base;
  public $altezza;

  use Drawable;

  public static $num_lati = 4;
  public static $num_angoli = 4;
  public static $num_vertici = 4;
  public static $angolo = 90;

  function __construct($_base, $_altezza)
  {
    $this->base = $_base;
    $this->altezza = $_altezza;
  }

  public function calcolaArea()
  {
    return $this->base * $this->altezza;
  }

  public function calcolaPerimetro()
  {
    // var_dump(self::$num_lati);
    return $this->base * 2 + $this->altezza * 2;
  }
}
