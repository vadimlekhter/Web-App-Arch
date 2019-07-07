<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

(new Client('Item 1'))->makeOperation();
(new Client('Item 2'))->makeOperation();