<?php

// leggere dalla sessione la password generata
session_start();

$password = $_SESSION['password'] ?? '';

if ($password === '') {
  header('Location: ./index.php');
}

// // var_dump($password);
session_unset();
// session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <main>
    <div class="container">
      <div class="h1">
        <?php echo $password ?>
      </div>
    </div>
  </main>

</body>

</html>