<?php


class ThirsdayLunch extends AbstractLunch
{
    protected function salad()
    {
        print_r('Свекольный' . PHP_EOL);
    }

    protected function soup()
    {
        print_r('Рыбный суп' . PHP_EOL);
    }

    protected function mainDish()
    {
        print_r('Хек жареный с овощами' . PHP_EOL);
    }
}