<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

function makeKitchen (\factory\AbstractFactory $abstractFactory) {
    $newItem = $abstractFactory->newKitchenItem();
    $newItem->getItem();
}

makeKitchen(new \factory\TableKitchenFactory('Table1'));
makeKitchen(new \factory\ChairKitchenFactory('Chair1'));
makeKitchen(new \factory\RefrigeratorKitchenFactory('Refrigerator1'));
makeKitchen(new \factory\StoveKitchenFactory('Stove1'));

makeKitchen(new \factory\TableKitchenFactory('Table2'));
makeKitchen(new \factory\ChairKitchenFactory('Chair2'));
makeKitchen(new \factory\RefrigeratorKitchenFactory('Refrigerator2'));
makeKitchen(new \factory\StoveKitchenFactory('Stove2'));