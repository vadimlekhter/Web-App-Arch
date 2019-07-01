<?php


namespace factory;


use kitchen\ChairKitchen;

class ChairKitchenFactory extends AbstractFactory
{
    public function newKitchenItem()
    {
        return new ChairKitchen($this->item);
    }
}