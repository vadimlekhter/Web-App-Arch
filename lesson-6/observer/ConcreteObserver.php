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
     * @param $data
     */
    public function handleEvent($data)
    {
        print_r('Новые данные ' . $data . PHP_EOL);
    }

}