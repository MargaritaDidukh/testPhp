<?php
$db = [
    'mysql' => [
        'DB_HOST'     => $_ENV['DB_HOST'],
        'DB_PORT'     => $_ENV['DB_PORT'],
        'DB_DATABASE' => $_ENV['DB_DATABASE'],
        'DB_USERNAME' => $_ENV['DB_USERNAME'],
        'DB_PASSWORD' => $_ENV['DB_PASSWORD'],
    ],
];
return $db['mysql'];


