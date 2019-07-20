<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$db = new Db();

$db->setData([
    1 => [
        'name' => 'John',
        'email' => 'john@mail.com'
    ],
    2 => [
        'name' => 'Tom',
        'email' => 'tom@mail.com'
    ],
]);


$result = new IdentityMap($db);
var_dump($result->getData(1));
var_dump($result->getData(1));
var_dump($result->getData(2));
var_dump($result->getData(2));
var_dump($result->getData(3));


