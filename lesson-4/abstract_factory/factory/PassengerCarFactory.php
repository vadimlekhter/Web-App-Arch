<?php


namespace factory;

use cars\AbstractCar;
use cars\PassengerCar;

class PassengerCarFactory extends AbstractFactory
{
    /**
     * @return AbstractCar
     */
    public function newCar():AbstractCar
    {
        return new PassengerCar($this->model);
    }

}