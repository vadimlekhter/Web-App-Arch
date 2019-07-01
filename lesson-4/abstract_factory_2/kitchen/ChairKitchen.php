<?php


namespace kitchen;


class ChairKitchen extends AbstractKitchen
{
    public function getItem()
    {
        print_r('Your chair is ' . $this->item . '.' . PHP_EOL);
    }
}