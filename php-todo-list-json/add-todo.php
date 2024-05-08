<?php

$new_todo = isset($_POST['todo']) ?  trim($_POST['todo']) : '';

// var_dump($new_todo);
$response = [
  'success' => false,
];

if ($new_todo) {

  // salvare la nuova todo nell'array di todos
  $todo = [
    'text' => $new_todo,
    'done' => false
  ];

  // leggiamo il file che contiene le todos in formato json
  $data_string = file_get_contents('todos.json');
  // trasformiamo il json in array php
  $todos = json_decode($data_string, true);

  // pushiamo la nuova todo nell'array
  $todos[] = $todo;

  // salvando il nuovo array nel file todos.json (sovrascrive completamente il contenuto precedente del file)
  $data_string = json_encode($todos);
  file_put_contents('todos.json', $data_string);

  $response['success'] = true;
  $response['todo'] = $todo;
} else {
  $response['error'] = 'Non è stato possibile salvare la nuova todo.';
}

header('Content-type: application/json');

echo json_encode($response);

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

// $text = json_encode($todos);
// file_put_contents('todos.json', $text);
