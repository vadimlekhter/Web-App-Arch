<?php


namespace kitchen;


class TableKitchen extends AbstractKitchen
{
    public function getItem()
    {
        print_r('Your table is ' . $this->item . '.' . PHP_EOL);
    }
}