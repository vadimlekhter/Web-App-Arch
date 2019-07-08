<?php


interface IObservable
{
    /**
     * @param IObserver $obj
     */
    public function addObserver($obj);

    public function notifyObservers();
}