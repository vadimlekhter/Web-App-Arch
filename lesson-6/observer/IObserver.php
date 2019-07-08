<?php


interface IObserver
{
    /**
     * @param IObservable $obj
     * @return mixed
     */
    public function handleEvent($obj);
}