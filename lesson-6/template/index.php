<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

switch ($dayOfWeek = date('l')) {
    case 'Monday':
        (new MondayLunch($dayOfWeek));
        break;
    case 'Tuesday':
        (new TuesdayLunch($dayOfWeek));
        break;
    case 'Wednesday':
        (new WednesdayLunch($dayOfWeek));
        break;
    case 'Thirsday':
        (new ThirsdayLunch($dayOfWeek))->getLunch();
        break;
    case 'Friday':
        (new FridayLunch($dayOfWeek));
        break;
    default:
        print_r('Сегодня ланча нет' . PHP_EOL);
}