<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\GetMax\getMax;

class GetMaxTest extends TestCase
{
    public function testGetMax(): void
    {
        $collection = [5, 3, 6, 2, 100, -1, -200];
        $this->assertEquals(100, getMax($collection));

        $collection2 = [];
        $this->assertEquals(0, getMax($collection2));
    }
}
