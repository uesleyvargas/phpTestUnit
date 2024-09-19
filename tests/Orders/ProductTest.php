<?php

namespace Test\Orders;

use App\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    public function testSetAttributes(): void
    {
        $product = new Product();
        $product->setId ("p001")
                ->setName ("telefone xiaomi")
                ->setPrice (3000.00)
                ->setTotal (3000.00);
        
        $this->assertTrue($product instanceof Product);
        $this->assertEquals("p001",$product->id);
        $this->assertEquals("telefone xiaomi",$product->name);
        $this->assertEquals(3000.00,$product->price);
        $this->assertEquals(3000.00,$product->total);

    }
}