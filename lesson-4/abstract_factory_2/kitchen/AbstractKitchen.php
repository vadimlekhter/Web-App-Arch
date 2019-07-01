<?php


namespace kitchen;


abstract class AbstractKitchen
{
    protected $item;
    /**
     * AbstractKitchen constructor.
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    abstract public function getItem ();
}