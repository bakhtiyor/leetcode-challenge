<?php

namespace App\Tests;

use App\MostFrequentEvenElement;
use PHPUnit\Framework\TestCase;

class MostFrequentEvenElementTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMostFrequentEven(array $nums, int $expected): void
    {
        $mostFrequentEvenElement = new MostFrequentEvenElement();
        $result = $mostFrequentEvenElement->mostFrequentEven($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[0,0,0,0], 0],
            [[0,1,2,2,4,4,1], 2],
            [[4,4,4,9,2,4], 4],
            [[29,47,21,41,13,37,25,7], -1]
        ];
    }
}
