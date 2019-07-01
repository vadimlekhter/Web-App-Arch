<?php


namespace factory;


use kitchen\TableKitchen;

class TableKitchenFactory extends AbstractFactory
{
    public function newKitchenItem()
    {
        return new TableKitchen($this->item);
    }

}