<?php

interface Pricable {
    public function getPrice(): int;
}

interface imagable {
    public function getImages();
}

interface Product {
    public function getName();
}
trait Stringify {
    public function toString() {
        return 'aaaa';
    }
}

class Keyboard implements Pricable, Imagable {
    use Stringify;
    public function getPrice() {
        return 5;
    }
}

class Mouse implements Product {

}

class Dispay implements Product {

}

class Basket {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }
}

class Order {
    public static $order = '123';

    public static function sum(Basket $basket) {
        self::$order = '1';
    }

    public static function test() {
        echo self::$order;
    }
}

$basket = new Basket();
$basket->addProduct(new Keyboard);
$basket->addProduct(new Mouse);

// $order = new Order();
Order::sum($basket);
Order::test();