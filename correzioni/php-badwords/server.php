<?php

var_dump($_POST);

$exist = isset($_POST['parola']);

var_dump($exist);

$parola = isset($_POST['parola']) === true ? $_POST['parola'] : '';
$paragrafo = $_POST['paragrafo'] ?? '';

// var_dump($parola);
// var_dump($paragrafo);

if ($parola !== '' && $paragrafo !== '') {

  $nuovoParagrafo = str_replace($parola, '***', $paragrafo, $count);

?>
  <p>
    Paragrafo: <?php echo $paragrafo; ?>
  </p>
  <p>
    Lunghezza: <?php echo strlen($paragrafo); ?>
  </p>
  <br>
  <p>
    Nuovo Paragrafo: <?php echo $nuovoParagrafo; ?>
  </p>
  <p>
    Lunghezza: <?php echo strlen($nuovoParagrafo); ?>
  </p>
  <p>
    Numero sostituzioni: <?php echo $count; ?>
  </p>
<?php

} else {

?>
  <p>
    Non hai inviato nessun dato.
    <a href="./index.php">Torna al form</a>
  </p>
<?php

}
