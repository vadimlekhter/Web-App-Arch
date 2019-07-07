<?php


abstract class AbstractLunch
{

    /**
     * AbstractLunch constructor.
     */
    public function __construct($dayOfWeek)
    {
        print_r('Меню на ' . $this->russianDayOfWeek($dayOfWeek) . PHP_EOL);
        $this->salad();
        $this->soup();
        $this->mainDish();
        $this->drink();
    }

    protected function russianDayOfWeek($dayOfWeek)
    {
        switch ($dayOfWeek) {
            case 'Monday':
                return 'понедельник';
                break;
            case 'Tuesday':
                return 'вторник';
                break;
            case 'Wednesday':
                return 'среду';
                break;
            case 'Thirsday':
                return 'четверг';
                break;
            case 'Friday':
                return 'пятницу';
                break;
        }
        return true;
    }

    abstract protected function salad();

    abstract protected function soup();

    abstract protected function mainDish();

    protected function drink()
    {
        print_r('Чай, кофе или компот' . PHP_EOL);
    }

}