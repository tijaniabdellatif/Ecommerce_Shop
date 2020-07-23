Hi this is acme store

<?php


// require __DIR__.'/../app/config/_env.php';
require_once __DIR__ . '/../bootstrap/init.php';

$app_name = getenv('APP_NAME');

echo $app_name;

