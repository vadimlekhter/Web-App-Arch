<?php


namespace factory;


use kitchen\RefrigeratorKitchen;

class RefrigeratorKitchenFactory extends AbstractFactory
{
    public function newKitchenItem()
    {
        return new RefrigeratorKitchen($this->item);
    }
}