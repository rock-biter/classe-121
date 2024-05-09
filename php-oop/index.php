<?php

class Address
{
  public $street;
  public $postal_code;
  public $city;

  function __construct($_city, $_street, $_postal_code)
  {
    $this->city = $_city;
    $this->street = $_street;
    $this->postal_code = $_postal_code;
  }
}

// dichiariamo la classe Persona
class Persona
{
  // ci mettero cose...
  private $nome;
  public $cognome;
  private $eta;
  public $address;

  function __construct(string $_nome, string $_cognome, int $_eta)
  {
    // $this->nome = $_nome;
    $this->setNome($_nome);
    $this->cognome = $_cognome;
    $this->setEta($_eta);
    // $this->address = $_address;
  }

  public function setAddress(Address $_address)
  {
    $this->address = $_address;
  }

  // setter
  public function setNome(string $new_nome): void
  {
    $this->nome = $new_nome;
  }

  // getter
  public function getNome(): string
  {
    return $this->nome;
  }

  public function setEta(int $eta): void
  {
    if (is_numeric($eta) && $eta > 0) {
      $this->eta = intval($eta);
    } else {
      // segnalere un errore
      var_dump('il valore non è corretto');
    }
  }

  public function saluta(): string
  {
    $nome = $this->nome;
    $cognome = $this->cognome;

    return "Ciao mi chiamo $nome $cognome";
  }
}

class User
{
}

// creando l'instaza della classe Persona => un oggetto
$address = new Address('Ferrara', 'Via delle Volte', '44121');
$giangi = new Persona('Giangi', 'Lomarco', 33);

$giangi->setAddress($address);

$giangi->setEta(34);
$giangi->setNome('Gianluca');

var_dump($giangi->address);

if (!is_null($giangi->address)) {
  var_dump($giangi->address->street);
}

// $giangi->nome = 'Giangi';
// $giangi->setNome('Giangi');
// // $giangi->eta = null;
// $giangi->setEta('13');
// $giangi->setEta('ciao');
// $giangi->setEta([30]);

echo $giangi->saluta();

$address2 = new Address('Torino', 'Via Milano', 10100);
$giovanni = new Persona('Giovanni', 'Mimmo', 12);

if (!is_null($giovanni->address)) {
  var_dump($giovanni->address->street);
}

var_dump($giovanni->address?->street);
// $giovanni->nome = 'Giovanni';
// $giovanni->setNome('Giovanni');

echo '<br>';

echo $giovanni->saluta();

var_dump($giangi);
var_dump($giovanni);


$utente = new User();
var_dump($utente);

$oggetto = new stdClass();
var_dump($oggetto);


class Quadrato
{

  public $lato;
  public static $num_lati = 4;

  public static function getNumLati()
  {
    return self::$num_lati;
  }

  function __construct(int $_lato)
  {
    $this->lato = $_lato;
  }

  public function calcolaArea()
  {
    return $this->lato * $this->lato;
  }

  public function calcolaPerimetro()
  {
    // var_dump(self::$num_lati);
    return $this->lato * self::$num_lati;
  }
}

// prorpieta statica: accessibili dalla classe e non dall'istanza
var_dump(Quadrato::$num_lati);
// metodo statico: accessibili dalla classe e non dall'istanza
var_dump(Quadrato::getNumLati());

$quadrato1 = new Quadrato(10);
$quadrato2 = new Quadrato(5);

var_dump($quadrato1->calcolaPerimetro());

if ($quadrato1->calcolaArea() > $quadrato2->calcolaArea()) {
  var_dump("Lárea del primo quadrato è maggiore del secondo");
}


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