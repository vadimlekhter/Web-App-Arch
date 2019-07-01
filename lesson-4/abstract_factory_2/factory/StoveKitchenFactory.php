<?php


namespace factory;


use kitchen\StoveKitchen;

class StoveKitchenFactory extends AbstractFactory
{
    public function newKitchenItem()
    {
        return new StoveKitchen($this->item);
    }

}