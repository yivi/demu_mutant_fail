<?php

use PHPUnit\Framework\TestCase;


class FooMinTest extends TestCase
{

    public function testGiveMeZero()
    {
        $a = new FooZero();
        $this->assertEquals($a->zero(10), 0);

    }
}
