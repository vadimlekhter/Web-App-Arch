<?php


class ConcreteObserver implements IObserver
{


    /**
     * ConcreteObserver constructor.
     */
    public function __construct()
    {
        ConcreteObservable::getInstance()->addObserver($this);
    }

    /**
     * @param IObservable $obj
     */
    public function handleEvent($obj)
    {
       print_r($obj->data . PHP_EOL);
    }

}