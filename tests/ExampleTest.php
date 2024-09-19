<?php

namespace Tests;

use App\MyClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase 
{
    public function testHelloWord(): void 
    { 
        $obj = new MyClass();
        $this->assertNotEmpty($obj->helloWord());
    }
}