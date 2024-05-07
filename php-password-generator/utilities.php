<?php

function generaPassword($length)
{

  $password = '';

  $letters = 'abcdefghilmnorpqrstuvz';
  $numbers = '0134567894';
  $symbols = '#@&)([]{}?';

  $chars = $letters . strtoupper($letters) . $numbers . $symbols;
  // genera la password con caratteri random

  for ($i = 0; $i < $length; $i++) {

    $index = rand(0, strlen($chars) - 1);

    $char = $chars[$index];
    // var_dump($char);

    $password .= $char;
  }

  // var_dump($password);

  return $password;
}
