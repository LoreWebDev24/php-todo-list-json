<?php 

$i = $_POST['id'] ?? null;

$response = [
    'success' => true,
    'results' => []
];

$todos_string = file_get_contents('./todos.json');

$todos = json_decode($todos_string, true);

unset($todos[$i]);

$response['results'] = $todos;

$todos_string = json_encode($todos);

file_put_contents('./todos.json', $todos_string);

header('Content-type: application/json');
echo json_encode($response);