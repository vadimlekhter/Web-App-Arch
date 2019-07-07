<?php


class RubEuroChange implements IExchange
{
    /**
     * @param float $value
     * @param float $rate
     * @return void
     */
    public function change($value, $rate)
    {
        print_r('Итого ' . $value / $rate . ' евро' . PHP_EOL);
    }
}