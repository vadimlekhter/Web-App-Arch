<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$car = new Car;
$car->assembleCar();