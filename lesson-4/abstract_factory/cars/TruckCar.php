<?php


namespace cars;


class TruckCar extends AbstractCar
{
    /**
     * @return void
     */
    public function newCarDescr()
    {
        echo "You bought new truck car $this->model" . PHP_EOL;
    }

}