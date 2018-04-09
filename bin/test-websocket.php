<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use WebSocket\Client;

$client = new Client("ws://echo.websocket.org/");
$client->send("Hello WebSocket.org! \n");

echo $client->receive(); // Will output 'Hello WebSocket.org!'