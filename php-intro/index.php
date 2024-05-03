<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatti</title>
</head>

<body>

  <main>
    <form action="./thank-you.php" method="POST">
      <p>
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Il tuo nome">
      </p>
      <p>
        <label for="last_name">Cognome</label>
        <input type="text" name="last_name" id="last_name" placeholder="Il tuo cognome">
      </p>

      <p>
        <label for="message">Messaggio</label>
        <textarea name="message" id=message placeholder="Il tuo messaggio"></textarea>
      </p>

      <button>Invia</button>

    </form>
  </main>

</body>

</html>