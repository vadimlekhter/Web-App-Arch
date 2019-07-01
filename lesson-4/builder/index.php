<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

function makeProduct(Name $name, Price $price, Discount $discount)
{
    $productBuilder = new ProductBuilder();

    $productBuilder->setName($name);
    $productBuilder->setPrice($price);
    $productBuilder->setDiscount($discount);

    return $productBuilder->build();

}

$product = makeProduct(new Name('Apple'), new Price(30), new Discount(10));

var_dump($product);
var_dump($product->name->value);
var_dump($product->price->value);
var_dump($product->discount->value);