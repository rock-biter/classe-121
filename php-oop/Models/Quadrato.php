<?php

require_once __DIR__ . '/Rect.php';

class Square extends Rect
{

  function __construct($_lato)
  {
    parent::__construct($_lato, $_lato);
  }

  public function calcolaPerimetro()
  {
    // var_dump(self::$num_lati);
    // con self ci riferiamo alla classe Sqaure
    // con $this ci riferiamo invece all'instanza che invoca questo metodo
    return $this->base * self::$num_lati;
  }
}
