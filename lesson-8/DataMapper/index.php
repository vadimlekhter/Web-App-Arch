<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$db = new Db(
    [
        1 => [
            'name' => 'John',
            'email' => 'john@mail.com'
        ]
    ]
);

var_dump((new UserMapper($db))->getItem(1));
var_dump((new UserMapper($db))->getItem(2));