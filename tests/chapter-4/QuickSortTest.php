<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\Chapter4\QuickSort\quickSort;

class QuickSortTest extends TestCase
{
    public function testQuickSort(): void
    {
        $collection = [5, 3, 6, 2, 100, -1, -200];
        $actual = quickSort($collection);
        $expected = [-200, -1, 2, 3, 5, 6, 100];
        $this->assertEquals($expected, $actual);
    }
}
