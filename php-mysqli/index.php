	<?php

  session_start();

  $user_id = $_SESSION['user_id'] ?? null;

  if ($user_id != null) {
    // se user_id != null allora utente è loggato
    header('Location: ./departments.php'); //redirect alla index.php (login)
  }

  require_once __DIR__ . '/conn.php';


  // echo "Connessione riuscita!";

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  if ($email !== '' && $password !== '') {
    // proviamo a fare il login
    $md5password = md5($password);

    // var_dump($password);
    // var_dump($md5password);

    $stmt = $conn->prepare(
      "SELECT `name`, `id` FROM `users` WHERE `email` = ? AND `password` = ?"
    );

    $stmt->bind_param('ss', $email, $md5password);
    // qui vieni eseguita la query
    $stmt->execute();


    // get result
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
      $user = $result->fetch_assoc();

      $_SESSION['user_name'] = $user['name'];
      $_SESSION['user_id'] = $user['id'];

      // redirect alla dashboard
      header('Location: ./departments.php');
    } else {
      $login_error = "Nessun utente con queste credenziali";
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
	          <div class="mb-3">
	            <label for="email" class="form-label">Email</label>
	            <input required type="eamil" class="form-control" id="email" name="email" placeholder="Email address" value="<?php echo $email; ?>">
	          </div>
	          <div class="mb-3">
	            <label for="password" class="form-label">Password</label>
	            <input required type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
	          </div>
	          <div>
	            <button class="btn btn-primary">Login</button>
	          </div>
	        </form>
	        <?php
          if (isset($login_error) && $login_error != '') {
          ?>
	          <div class="alert alert-danger" role="alert">
	            <?php echo $login_error; ?>
	          </div>
	        <?php
          }
          ?>
	      </div>
	    </section>
	  </main>

	</body>

	</html>