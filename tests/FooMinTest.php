<?php

use PHPUnit\Framework\TestCase;


class FooMinTest extends TestCase
{

    public function testGiveMeZero()
    {
        $a = new FooZero();
        $this->assertSame($a->zero(100), 0);

    }
}
