<?php

require_once __DIR__ . '/Persona.php';
require_once __DIR__ . '/Address.php';

class User extends Persona
{
  public $email;

  function __construct(string $_nome, string $_cognome, int $_eta, Address $_address, string $_email)
  {
    // $this->setNome($_nome);
    // $this->cognome = $_cognome;
    // $this->setEta($_eta);
    parent::__construct($_nome, $_cognome, $_eta, $_address);
    $this->email = $_email;
    // $this->eta = $_eta; // lo possiamo fare perchè $eta è protected e non private
    // $this->nome = $_nome; // nome è privata e non accessibile dalla calsse User
    // $this->address = null;

  }

  public function setEmail($_email)
  {
    // validazone del caso
    $this->email = $_email;
  }

  public function login()
  {

    $msg = 'Sono loggato';
    $this->pushMessage($msg);

    return $msg;
  }

  // NOn possiamo settare da qui la proprietà nome che è privata di Persona
  // public function setNome($_nome) {
  //   $this->nome = $_nome;
  // }
}
