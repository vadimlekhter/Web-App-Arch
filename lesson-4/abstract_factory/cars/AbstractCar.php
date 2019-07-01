<?php


namespace cars;


abstract class AbstractCar
{
    /**
     * @var string
     */
    protected $model;

    /**
     * AbstractCar constructor.
     * @param string $model
     */
    public function __construct(string $model)
    {
        $this->model = $model;
    }

    /**
     *
     */
    public function helloMessage()
    {
        echo "Hi, you are bying new car!" . PHP_EOL;
    }

    /**
     * @return void
     */
    abstract public function newCarDescr();
}