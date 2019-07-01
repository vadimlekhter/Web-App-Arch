<?php


namespace factory;


use cars\AbstractCar;
use cars\TruckCar;

class TruckCarFactory extends AbstractFactory
{
    /**
     * @return AbstractCar
     */
    public function newCar():AbstractCar
    {
        return new TruckCar($this->model);
    }

}