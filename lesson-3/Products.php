<?php


//God Object, разные функции в одном классе, вывод на экран, в БД и из БД (не реализовывал), установка цены со скидкой.
//В этом примере также используется класс Product, включающий бессмысленно широкий спектр товаров, в реальности надо
// наследоваться от общего к частному, класс таких продуктов, класс других, и так далее, чтобы не было неиспользуемых свойств.
class ProductsProcessing
{
    public $product;

    /**
     * Products constructor.
     * @param $product
     */


    //Blind Faith отстуствие проверки входящего параметра
    public function __construct($product)
    {
        $this->product = $product;
    }


    //Cryptic code
    //Вывод на экран
    public function pP()
    {
        print_r('Продукт:' . PHP_EOL );
        var_dump($this->product);
    }

    //Cryptic code
    //Дискаунт от цены и вывод на экран
    public function sD($discount)
    {
        $this->product->price = $this->product->price - $this->product->price / 100 * $discount;
        print_r('Новая цена = ' . $this->product->price . PHP_EOL);
    }

    //Cryptic code
    //Запись в БД
    public function toDB()
    {
        print_r('Запись в базу' . PHP_EOL);
    }

    //Cryptic code
    //Получение из БД
    public function fromDB()
    {
        print_r('Запись из базы' . PHP_EOL);
    }
}


class Product
{
    public $id;
    public $name;
    public $price;
    public $weight;
    public $volume;
    public $color;
    public $size;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $weight
     * @param $volume
     * @param $color
     * @param $size
     */
    public function __construct($id, $name, $price, $weight, $volume, $color, $size)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->volume = $volume;
        $this->color = $color;
        $this->size = $size;
    }
}

////Cryptic code
$p1 = new Product(1, 'Хлеб', 20, 0.5, null, null, null);
//Cryptic code
$pp1 = new ProductsProcessing($p1);
$pp1->pP();
$pp1->toDB();
$pp1->fromDB();

//Cryptic code
$p2 = new Product(2, 'Рубашка', 200, null, null, 'Белый', 'L');
//Cryptic code
$pp2 = new ProductsProcessing($p2);
$pp2->pP();

//Cryptic code
$pp2->sD(20);

$pp3 = new ProductsProcessing(25);
//Cryptic code
$pp3->pP();