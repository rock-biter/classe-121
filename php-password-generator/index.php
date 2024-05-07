<?php
session_start();

require_once __DIR__ . '/utilities.php';

$length = $_GET['length'] ?? null;
var_dump($length);

if ($length) {

  $num = intval($length);
  // var_dump($num);


  $password = generaPassword($num);

  $_SESSION['password'] = $password;

  // redirect
  header('Location: ./password.php');

  // var_dump($password);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genera password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <main>
    <section class="py-5">
      <div class="container">
        <form action="" method="GET">
          <p>
            <input type="text" class="form-control" placeholder="Lunghezza" name="length" value="<?php echo $length; ?>">
          </p>
          <input class="btn btn-primary" type="submit" value="Genera">
        </form>
      </div>
    </section>
  </main>

</body>

</html>