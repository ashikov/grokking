<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\SelectionSort\selectionSort;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort(): void
    {
        $collection = [5, 3, 6, 2, 10, -1];
        $this->assertEquals([-1, 2, 3, 5, 6, 10], selectionSort($collection));
    }
}
