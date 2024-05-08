<?php

$data_string = file_get_contents('todos.json');

$todos = json_decode($data_string, true);

// $todos = [
//   [
//     'text' => 'Fare la spesa',
//     'done' => false
//   ],
//   [
//     'text' => 'Lavare la macchina',
//     'done' => true
//   ],
//   [
//     'text' => 'Comprare il pane',
//     'done' => false
//   ],
//   [
//     'text' => 'Predere le bimbe da scuola',
//     'done' => false
//   ]
// ];

// primo passaggio
header('Content-type: application/json');

$response = [
  'results' => $todos,
  'success' => true
];

// generarel'output come stringa json
echo json_encode($response);
