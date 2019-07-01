<?php


namespace kitchen;


class RefrigeratorKitchen extends AbstractKitchen
{
    public function getItem()
    {
        print_r('Your refrigerator is ' . $this->item . '.' . PHP_EOL);
    }
}