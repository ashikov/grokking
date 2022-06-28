<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\BinarySearch\binarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch(): void
    {
        $collection = [1, 3, 5, 7, 9];
        $this->assertEquals(1, binarySearch($collection, 3));
        $this->assertEquals(null, binarySearch($collection, 100));
    }
}
