<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

(new ChangeOffice(new RubDollarChange(), 65000, 65))->change();
(new ChangeOffice(new DollarRubChange(), 100, 65))->change();

(new ChangeOffice(new RubEuroChange(), 144000, 72))->change();
(new ChangeOffice(new EuroRubChange(), 100, 72))->change();