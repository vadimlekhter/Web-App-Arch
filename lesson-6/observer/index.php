<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();
$observer3 = new ConcreteObserver();

ConcreteObservable::getInstance()->setData(5);
ConcreteObservable::getInstance()->setData('Тест');

ConcreteObservable::getInstance()->removeObserver($observer3);

ConcreteObservable::getInstance()->setData(5);
ConcreteObservable::getInstance()->setData('Тест');