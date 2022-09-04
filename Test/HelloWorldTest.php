<?php

namespace CyberTiwari\SimplePackage;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $data = HelloWorld::sayHello();
        $this->assertTrue($data == ' World');
    }
}
