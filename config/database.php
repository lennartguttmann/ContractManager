<?php
// config/database.php
return [
    'host' => getenv('DB_HOST') ?: 'db',
    'port' => getenv('DB_PORT') ?: 3306,
    'dbname' => getenv('DB_DATABASE') ?: 'devdb',
    'user' => getenv('DB_USERNAME') ?: 'devuser',
    'password' => getenv('DB_PASSWORD') ?: 'devpassword',
    'dsn' => 'mysql:host=' . (getenv('DB_HOST') ?: 'db') . ';port=' . (getenv('DB_PORT') ?: 3306) . ';dbname=' . (getenv('DB_DATABASE') ?: 'devdb'),
];
