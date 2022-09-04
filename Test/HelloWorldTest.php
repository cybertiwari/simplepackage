<?php

namespace CyberTiwari\SimplePackage;

use PHPUnit\Framework\TestCase;
use CyberTiwari\SimplePackage\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $data = HelloWorld::sayHello();
        $this->assertTrue($data == " World");
    }
}