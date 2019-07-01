<?php


namespace factory;


abstract class AbstractFactory
{
    protected $item;
    /**
     * AbstractFactory constructor.
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    abstract public function newKitchenItem ();
}