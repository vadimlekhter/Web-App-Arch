<?php


interface IObservable
{
    /**
     * @param IObserver $obj
     */
    public function addObserver(IObserver $obj);

    public function removeObserver(IObserver $obj);

    public function notifyObservers();
}