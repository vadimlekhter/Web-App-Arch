<?php


class FridayLunch extends AbstractLunch
{
    protected function salad()
    {
        print_r('Мимоза' . PHP_EOL);
    }

    protected function soup()
    {
        print_r('Фасолевый суп' . PHP_EOL);
    }

    protected function mainDish()
    {
        print_r('Пельмени' . PHP_EOL);
    }
}