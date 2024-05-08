<?php


session_start();

$email = $_SESSION['email'] ?? null;

if ($email !== null) {
  echo 'Success';
} else {
  echo 'Fail!';
}

session_unset();
