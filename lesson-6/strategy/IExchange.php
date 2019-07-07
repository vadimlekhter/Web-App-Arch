<?php


interface IExchange
{
    public function change($value, $rate);
}