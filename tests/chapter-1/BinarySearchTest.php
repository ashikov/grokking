<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\BinarySearch\binarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch(): void
    {
        $collection = [1, 2, 3, 4, 5, 6, 7];
        $this->assertTrue(binarySearch($collection, 5));
    }
}
