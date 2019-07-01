<?php


namespace cars;


class PassengerCar extends AbstractCar
{
    /**
     * @return void
     */
    public function newCarDescr()
    {
        echo "You bought new passenger car $this->model" . PHP_EOL;
    }

}