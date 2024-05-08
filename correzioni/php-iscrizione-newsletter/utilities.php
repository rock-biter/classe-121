<?php

function validate($email)
{

  if (!$email) {
    return false;
  }

  // controllare se è presente una @
  if (strpos($email, '@') === false) {
    return false;
  }

  // controllare se è presente il .
  if (strpos($email, '.') === false) {
    return false;
  }

  // return boolean
  return true;
}
