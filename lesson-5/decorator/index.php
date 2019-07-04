<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});


(new \decorators\SpiceDecorator(new \decorators\KetchupDecorator(new \decorators\CheeseDecorator(new \decorators\DoubleDecorator
(new \components\BurgerComponent())))))->operation();