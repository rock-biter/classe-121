<?php

require_once __DIR__ . '/utilities.php';

$email = $_POST['email'] ?? null;
// var_dump($email);

if ($email !== null) {

  if (validate($email)) {

    session_start();

    $_SESSION['email'] = $email;

    header('Location: ./subscription.php');
  }
}


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
    <section class="py-5">
      <div class="container">
        <form action="" method="POST">
          <h2>Inscrizione Newsletter</h2>
          <p class="mb-3">
            <input type="text" placeholder="Email address" class="form-control" name="email">
          </p>
          <input class="btn btn-primary" type="submit" value="Isciviti">
        </form>

        <?php

        if ($email !== null) :
          // allora la mail è stata invitata
        ?>
          <div class="mt-5">
            <?php
            if (validate($email)) :
              // alert succes

            ?>
              <div class="alert alert-success" role="alert">
                Iscrizione avvenuta con successo!
              </div>
            <?php

            else :
              // alert danger
            ?>
              <div class="alert alert-danger" role="alert">
                La mail non è valida.
              </div>
            <?php
            endif;
            ?>
          </div>
        <?php

        endif;

        ?>

      </div>
    </section>
  </main>

</body>

</html>