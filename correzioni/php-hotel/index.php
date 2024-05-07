<?php
$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

$parking_filter = $_GET['parking'] ?? null;

// var_dump($parking_filter);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <header>
    <div class="container">
      <div class="row">
        <div>
          Hotel
        </div>
      </div>
    </div>
  </header>

  <main>
    <section>
      <div class="container">

        <table class="table table-striped">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>
                <form action="">
                  <select name="parking" id="">
                    <option value="">tutti</option>
                    <option <?= $parking_filter === 'si' ? 'selected' : '' ?> value="si">si</option>
                    <option <?= $parking_filter === 'no' ? 'selected' : '' ?> value="no">no</option>
                  </select>
                  <input type="submit">
                </form>
              </th>
              <th></th>
              <th></th>
            </tr>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Parking</th>
              <th>Voto</th>
              <th>Distanza centro</th>
            </tr>
          </thead>
          <tbody>

            <!-- per ogni hotel -->
            <?php

            foreach ($hotels as $index => $hotel) :
              // var_dump($hotel);

              if (
                $parking_filter === null
                ||
                $parking_filter === '' ||
                ($parking_filter && $parking_filter === 'si' && $hotel['parking'] === true) ||
                (
                  $parking_filter && $parking_filter === 'no' && $hotel['parking'] === false
                )
              ) {
            ?>
                <tr>
                  <td><?= $index + 1 ?></td>
                  <td><?php echo $hotel['name']; ?></td>
                  <td><?= $hotel['parking'] === true ? 'SI' : 'NO'; ?></td>
                  <td><?= $hotel['vote']; ?></td>
                  <td><?= $hotel['distance_to_center']; ?></td>
                </tr>
            <?php

              }



            endforeach;

            ?>

          </tbody>
        </table>

      </div>
    </section>
  </main>

</body>

</html>