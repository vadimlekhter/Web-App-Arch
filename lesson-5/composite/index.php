<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$compMain = new \composites\Composite1('Товары');
$compFood = new \composites\Composite1('Продукты');
$compMeat = new \composites\Composite1('Мясные продукты');
$compMilk = new \composites\Composite1('Молочные продукты');
$meat = new \leafes\Leaf1('Мясо');
$sausage = new \leafes\Leaf1('Колбаса');
$chicken = new \leafes\Leaf1('Курица');
$milk = new \leafes\Leaf1('Молоко');
$yogurt = new \leafes\Leaf1('Йогурт');

$compGoods = new \composites\Composite1('Промтовары');
$compClothes = new \composites\Composite1('Одежда');
$compElectronics = new \composites\Composite1('Электроника');
$coats = new \leafes\Leaf1('Куртки');
$jeans = new \leafes\Leaf1('Джинсы');
$compTvs = new \composites\Composite1('Телевизоры');
$lgTv = new \leafes\Leaf1('LG');
$samsungTv = new \leafes\Leaf1('Samsung');
$compComputers = new \composites\Composite1('Компьютеры');

$compMain->add($compFood);
$compFood->add($compMeat);
$compFood->add($compMilk);
$compMeat->add($meat);
$compMeat->add($sausage);
$compMeat->add($chicken);
$compMilk->add($milk);
$compMilk->add($yogurt);

$compMain->add($compGoods);
$compGoods->add($compClothes);
$compGoods->add($compElectronics);
$compClothes->add($coats);
$compClothes->add($jeans);
$compElectronics->add($compTvs);
$compTvs->add($lgTv);
$compTvs->add($samsungTv);
$compElectronics->add($compComputers);

$compMain->display();

$compElectronics->remove($compComputers);

$compMain->display();