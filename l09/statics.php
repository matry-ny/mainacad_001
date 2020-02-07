<?php

class Strings
{
    public static function printLine(string $data) : void
    {
        echo $data, '<br>';
    }
}

class Math
{
    public static function sum(float $a, float $b) : float
    {
        return $a + $b;
    }

    public static function subtract(float $a, float $b) : float
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b) : float
    {
        return $a * $b;
    }

    public static function divide(float $a, float $b) : float
    {
        if ($b == 0) {
            return 0;
        }

        return $a / $b;
    }
}

class Shop
{
    /**
     * @var Product[]
     */
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function printCatalog()
    {
        foreach ($this->products as $product) {
            Strings::printLine("{$product->getName()}: {$product->getAmount()}");
        }
    }
}


class Product
{
    private $name;

    private $price;

    private $discount;

    public function __construct(string $name, float $price, float $discount = 0)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getAmount() : float
    {
        return Math::subtract($this->price, $this->discount);
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$shop = new Shop();

$notebook = new Product('MacBook Pro 2019', 70000, 219);
$phone = new Product('Smasumg J5 2017', 5000, 15);
$seledka = new Product('Seledka', 40, -3);

$shop->addProduct($notebook);
$shop->addProduct($phone);
$shop->addProduct($seledka);

$shop->printCatalog();