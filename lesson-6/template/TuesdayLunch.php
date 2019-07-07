<?php


class TuesdayLunch extends AbstractLunch
{
    protected function salad()
    {
        print_r('Весенний' . PHP_EOL);
    }

    protected function soup()
    {
        print_r('Харчо' . PHP_EOL);
    }

    protected function mainDish()
    {
        print_r('Курица с рисом' . PHP_EOL);
    }
}