<?php

class Address
{
  public $street;
  public $postal_code;
  public $city;

  function __construct(array $args)
  {
    $this->city = $args['city'];
    $this->street = $args['street'];
    $this->postal_code = $args['postal_code'];
  }
}
