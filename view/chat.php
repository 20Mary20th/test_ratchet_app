<?php
use Ratchet\Server\IoServer;
use MyApp\Chat;

ini_set('display_errors', 1);

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new Chat(),
    8080
);

$server->run();