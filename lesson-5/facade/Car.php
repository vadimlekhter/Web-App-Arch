<?php


class Car
{
    /**
     * @var Engine
     */
    protected $engine;
    /**
     * @var Color
     */
    protected $color;
    /**
     * @var Transmission
     */
    protected $transmission;


    /**
     * Car constructor.
     */
    public function __construct()
    {
        $this->engine = new Engine();
        $this->color = new Color();
        $this->transmission = new Transmission();
    }

    public function assembleCar()
    {
        $this->engine->getEngine();
        $this->color->getColor();
        $this->transmission->getTransmisssion();
    }
}