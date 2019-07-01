<?php


namespace factory;


use cars\AbstractCar;

abstract class AbstractFactory
{
    /**
     * @var string
     */
    protected $model;

    /**
     * AbstractFactory constructor.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return AbstractCar
     */
    abstract public function newCar():AbstractCar;
}