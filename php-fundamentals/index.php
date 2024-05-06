<?php


$name = 'Mario';

$messaggio = "Ciao mi chiamo $name"; // fuzniona con gli apici doppi
// $messaggio = "Ciao mi chiamo {$name}mamma.";

// $messaggio = 'Ciao mi chiamo ';

// $messaggio .= $name;

// var_dump($messaggio);


// ARRay
$nomi = ['Mario', 'Mimmo', 'Anita', 'Giuseppina'];
var_dump($nomi);

echo '<br>';
echo '<br>';

var_dump($nomi[1]);

$persona = [
  'nome' => 'Gianni',
  'eta' => 32,
  'altezza' => 175
];

$persona['peso'] = 80;
// push su array associativo
$persona[] = 'Lomarco';

echo '<br>';
echo '<br>';

var_dump($persona);

// ciclando un array associativo accendendo solo ai valori
// foreach ($persona as $value) {
//   echo '<br>';
//   var_dump($value);
// }

// cicliamo array assoc con chiave e valore
foreach ($persona as $key => $value) {
  echo '<br>';
  var_dump("chiave: $key, valore: $value");
}

$numeri = [2, 6, 3, 5, 9];

// PUSH 
$numeri[] = 10;

array_push($numeri, 21, 26, 49);

echo '<br>';
echo '<br>';

$length = count($numeri);

// for ($i = 0; $i < count($numeri); $i++) {
//   $num = $numeri[$i];
//   echo '<br>';
//   var_dump($num);
// }

// ciclare array ordinario
foreach ($numeri as $num) {
  echo '<br>';
  var_dump($num);
}

echo '<br>';

foreach ($numeri as $index => $num) {
  echo '<br>';
  var_dump($index, $num);
}

echo '<br>';
var_dump($numeri);
echo '<br>';
var_dump($length);


$classi = [
  ['mario', 'Gianni'],
  ['Mimmo', 'Marta'],
  ['Anita'],
  ['Susan', 'Miriam']
];

echo '<br>';
echo '<br>';


var_dump($classi);
var_dump($classi[1][0]); // mimmo

$persone = [
  $persona,
  [
    'nome' => 'Marcello',
    'eta' => 32,
    'altezza' => 175,
    'padre' => [
      'nome' => 'Michele',
      'eta' => 64,
      'altezza' => 182
    ]
  ],
  [
    'nome' => 'Carlotta',
    'eta' => 32,
    'altezza' => 175
  ],
  [
    'nome' => 'Alfredo',
    'eta' => 32,
    'altezza' => 175
  ]
];


echo '<br>';
echo '<br>';

$marcello = [
  'nome' => 'Marcello',
  'eta' => 32,
  'altezza' => 175,
  'padre' => [
    'nome' => 'Michele',
    'eta' => 64,
    'altezza' => 182
  ]
];


var_dump($persone);
var_dump($persone[2]['nome']); // Carlotta

echo '<br>';
echo '<br>';

// oggetti
// $car = new stdClass();
// var_dump($car);
