<?php

namespace Grokking\Tests;

use PHPUnit\Framework\TestCase;

use function Grokking\BreadthFirstSearch\search;

class BreadthFirstSearchTest extends TestCase
{
    public function testBreadthFirstSearch(): void
    {
        $graph = [
            'Roman' => ['Ella', 'Michael', 'Sergey', 'Arina'],
            'Ella' => ['Daria', 'Kate', 'Michael'],
            'Michael' => ['Roman', '[porn_seller]Ivan', 'Ruslan'],
            'Sergey' => [],
            'Arina' => [],
            'Kate' => [],
            'Ruslan' => [],
            'Daria' => [],
        ];

        $this->assertTrue(search($graph, 'Roman'));
        $this->expectOutputString('Ivan is a porn seller!');
    }
}
