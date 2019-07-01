<?php


namespace kitchen;


class StoveKitchen extends AbstractKitchen
{
    public function getItem()
    {
        print_r('Your stove is ' . $this->item . '.' . PHP_EOL);
    }
}