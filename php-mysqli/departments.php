<?php

session_start();

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id === null) {
  // se user_id === null allora utente non è loggato
  header('Location: ./index.php'); //redirect alla index.php (login)
}

require_once __DIR__ . '/conn.php';

$sql = 'SELECT `name`, `email`, `head_of_department` FROM `departments`';
$results = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <ul>
    <li>
      <a href="./logout.php">Logout</a>
    </li>
  </ul>

  <?php
  if ($results && $results->num_rows > 0) {

    // $row = $results->fetch_assoc();

    while ($row = $results->fetch_assoc()) {

  ?>
      <p><?php echo $row['name']; ?></p>
  <?php
    }
  }

  ?>

</body>

</html>