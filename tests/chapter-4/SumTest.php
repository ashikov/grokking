<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\Sum\sum;

class SumTest extends TestCase
{
    public function testSum(): void
    {
        $collection1 = [];
        $this->assertEquals(0, sum($collection1));

        $collection2 = [7];
        $this->assertEquals(7, sum($collection2));

        $collection3 = [5, 3, 6];
        $this->assertEquals(14, sum($collection3));
    }
}
