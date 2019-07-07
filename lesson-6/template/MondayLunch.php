<?php


class MondayLunch extends AbstractLunch
{
    protected function salad()
    {
        print_r('Оливье' . PHP_EOL);
    }

    protected function soup()
    {
        print_r('Борщ' . PHP_EOL);
    }

    protected function mainDish()
    {
        print_r('Котлета с картошкой' . PHP_EOL);
    }

}