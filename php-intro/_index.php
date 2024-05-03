<?php

// commento in php
// equivalente del console.log
// var_dump($_GET);

$nome = $_GET['nome'];
$age = $_GET['age'];
$className = "bg-red";
// $nomi = ["Anna", "Maria", 'Filippo'];

?>

<h1 class="<?php echo $className; ?>">Ciao mondo, mi chiamo <?php echo $nome; ?></h1>
<p>Ho <?php echo $age ?> anni.</p>