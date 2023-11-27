<?php

$status = $_POST['status'] ?? false;
$i = $_POST['id'] ?? null;

$response = [
    'success' => true,
    'results' => []
];

$todos_string = file_get_contents('./todos.json');

$todos = json_decode($todos_string, true);

$todos[$i]['done'] = !$todos[$i]['done'];
// var_dump($todos[$i]['status'] = !$status);

$response['results'] = $todos;

$todos_string = json_encode($todos);

file_put_contents('./todos.json', $todos_string);

header('Content-type: application/json');
echo json_encode($response);