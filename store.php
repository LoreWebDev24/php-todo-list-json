<?php

$new_todo = $_POST['newTodo'] ?? '';

$response = [
  'success' => true,
];

if ($new_todo) {

  $todos_string = file_get_contents('./todos.json');

  $todos = json_decode($todos_string, true);

  $todos[] = [
    'text' => $new_todo,
    'done' => false
  ];
  
  $response['todos'] = $todos;

  $todos_string = json_encode($todos);

  file_put_contents('./todos.json', $todos_string);
} else {

  $response['success'] = false;
  $response['message'] = 'Need a Parameter';
}

header('Content-type: application/json');
echo json_encode($response);