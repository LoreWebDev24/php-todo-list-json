<?php

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

json_encode($todos);
// var_dump(json_encode($todos));