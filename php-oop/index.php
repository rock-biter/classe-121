<?php

require_once __DIR__ . '/Models/Address.php';
require_once __DIR__ . '/Models/Persona.php';
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Quadrato.php';
require_once __DIR__ . '/Models/Point.php';

// creando l'instaza della classe Persona => un oggetto
// $address = new Address('Ferrara', 'Via delle Volte', '44121');
// $giangi = new Persona('Giangi', 'Lomarco', 33);

// $giangi->setAddress($address);
// $giangi->setEta(34);
// $giangi->setNome('Gianluca');

// var_dump($giangi->address);

// if (!is_null($giangi->address)) {
//   var_dump($giangi->address->street);
// }

// $giangi->nome = 'Giangi';
// $giangi->setNome('Giangi');
// // $giangi->eta = null;
// $giangi->setEta('13');
// $giangi->setEta('ciao');
// $giangi->setEta([30]);

// echo $giangi->saluta();

$address = new Address([
  'street' => 'Via Milano',
  'city' => 'Torino',
  'postal_code' => 10100
]);
$giovanni = new Persona('Giovanni', 'Mimmo', 12, $address);

if (!is_null($giovanni->address)) {
  var_dump($giovanni->address->street);
}

var_dump($giovanni->address?->street);
// $giovanni->nome = 'Giovanni'; // non possiamo perchè nome è private
// $giovanni->setNome('Giovanni');

echo '<br>';

echo $giovanni->saluta();

// var_dump($giangi);
var_dump($giovanni);


$utente = new User('Mimmo', 'Pasuqale', 24, $address, 'mimmo@gmail.com');
// $utente->setEmail('mimmo@gmail.com');
// $utente->eta = 23;
var_dump($utente->getNome());
var_dump($utente);

// controllare il tipo di un oggetto
var_dump($utente instanceof Persona); // true
var_dump($utente instanceof User); // true
var_dump($utente instanceof Address); // false

// $oggetto = new stdClass();
// var_dump($oggetto);


$utente->login();
$utente->saluta();
// $utente->saluta();
// $utente->saluta();
// $utente->saluta();
// $utente->saluta();

var_dump($utente->getMessages());



// prorpieta statica: accessibili dalla classe e non dall'istanza
var_dump(Square::$num_lati);
// metodo statico: accessibili dalla classe e non dall'istanza
// var_dump(Square::getNumLati());

$quadrato1 = new Square(10);
$quadrato2 = new Square(5);

$rettangolo = new Rect(10, 5);
$quadrato1->visible = false;
$quadrato1->draw('rosso');

var_dump($quadrato1);

var_dump($quadrato1->calcolaPerimetro());

if ($quadrato1->calcolaPerimetro() > $rettangolo->calcolaPerimetro()) {
  var_dump("L'area del quadrato è maggiore dell'area del rettangolo");
} elseif ($quadrato1->calcolaArea() < $retttangolo->calcolaArea()) {
  var_dump("L'area del rettangolo è maggiore dell'area del quadrato");
} else {
  var_dump('Le aree sono uguali');
}


$pointA = new Point(); // x = 0, y = 0
$pointB = new Point(10); // x = 10, y = 0
$pointC = new Point(8, 6); // x = 8, y = 6

$pointB->visible = false;

$pointA->draw('giallo');
$pointB->draw('blue');
$pointC->draw('green');

var_dump($pointA, $pointB, $pointC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <script src="./app.js"></script>
</body>

</html>