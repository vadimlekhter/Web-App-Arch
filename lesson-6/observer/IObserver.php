<?php


interface IObserver
{
    public function handleEvent($data);
}