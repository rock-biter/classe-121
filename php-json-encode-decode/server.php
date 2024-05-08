	
<?php

$students = [
  [
    'name' => 'Mario',
    'last_name' => 'Rossi'
  ],
  [
    'name' => 'Giovanna',
    'last_name' => 'Bianchi'
  ],
];

header('Content-Type: application/json');

echo json_encode($students);
