<?php
// var_dump($_GET);
// var_dump($_POST);

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$massage = $_POST['message'];

$message_length = strlen($massage);

$new_message = str_replace('stronzi', 'simpatici', $massage);

?>
<!-- <pre>
  <?php
  var_dump($_POST);
  ?>
</pre> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grazie</title>
</head>

<body>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Ciao <?php echo $name; ?> <?php echo $last_name; ?></h1>
          <p>Grazie per averci contatto, ti risponderemo presto.</p>
          <div>
            <?php echo $new_message; ?>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>

</html>