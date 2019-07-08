<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$client = new Client();
$client->makeOperation('Item 1');
$client->makeOperation('Item 2');
$client->makeOperation('Item 3');
$client->undo(3);
$client->redo(1);