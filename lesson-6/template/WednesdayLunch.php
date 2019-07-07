<?php


class WednesdayLunch extends AbstractLunch
{
    protected function salad()
    {
        print_r('Крабовый' . PHP_EOL);
    }

    protected function soup()
    {
        print_r('Гороховый суп' . PHP_EOL);
    }

    protected function mainDish()
    {
        print_r('Макароны по-флотски' . PHP_EOL);
    }
}