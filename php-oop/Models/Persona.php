<?php

require_once __DIR__ . '/Address.php';

class Persona
{
  // ci mettero cose...
  private $nome;
  private $cognome;
  protected $eta;
  public $address;

  private $messages = [];

  function __construct(string $_nome, string $_cognome, int $_eta, Address $_address)
  {
    // $this->nome = $_nome;

    $this->setNome($_nome);
    $this->cognome = $_cognome;
    $this->setEta($_eta);
    $this->address = $_address;
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

  protected function pushMessage(string $message)
  {
    if ($message) {
      $this->messages[] = $message;
    }
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function saluta(): string
  {
    $nome = $this->nome;
    $cognome = $this->cognome;

    $msg = "Ciao mi chiamo $nome $cognome";

    $this->pushMessage($msg);

    return $msg;
  }
}
