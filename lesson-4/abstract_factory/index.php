<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

function buyCar (\factory\AbstractFactory $abstractFactory) {
    $car = $abstractFactory->newCar();
    $car->helloMessage();
    $car->newCarDescr();
}

buyCar (new \factory\PassengerCarFactory('Ford'));
buyCar (new \factory\PassengerCarFactory('Honda'));
buyCar (new \factory\TruckCarFactory('MAN'));
buyCar (new \factory\TruckCarFactory('Volvo'));