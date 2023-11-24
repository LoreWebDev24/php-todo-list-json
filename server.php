<?php

// $todos_json = file_get_contents('./todos.json');
// $todos = json_decode($todos_json, true);

$todos = [
    [
    'text' => 'PHP',
    'done' => false
    ],
    [
    'text' => 'JavaScript',
    'done' => false
    ],
    [
    'text' => 'HTML',
    'done' => true
    ],
    [
    'text' => 'CSS',
    'done' => true
    ]
    ];

$response = [
  'success' => true,
  'results' => $todos,
];

header('Content-Type: application/json');
echo json_encode($response);