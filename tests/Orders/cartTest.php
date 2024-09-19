<?php

namespace Test\Orders;

use App\Orders\Cart;
use App\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase {
    public function testAddItems(): void 
    {
        $cart = new Cart();
        $p1 = new Product();
        $p2 = new Product();

        $cart->add($p1);
        $cart->add($p2);

        $this->assertCount(2, $cart->getItems());
        $this->assertSame($p1, $cart->getItems()[0]);
        $this->assertSame($p2, $cart->getItems()[1]);
    }

    public function testTotal(): void
    {
        $cart = new Cart();
        $p1 = new Product(); 
        $p1->setId ("p001")
        ->setName ("motorola moto g plus")
        ->setPrice (3000.00)
        ->setTotal (3000.00);

        $p2 = new Product();
        $p2->setId ("p001")
        ->setName ("iphone")
        ->setPrice (2500.00)
        ->setTotal (2500.00);


        $cart->add($p1);
        $cart->add($p2);

        $this->assertEquals(5500.00,$cart->getTotal());
    }
}