<?php

trait Drawable
{

  public $color;
  public $visible = true;

  public function draw($color)
  {
    // la logica per disegnare l'elemento
    if ($this->visible === true) {
      $this->color = $color;
      var_dump("Disegno l'elemento di colore: $color.");
    }
  }
}
