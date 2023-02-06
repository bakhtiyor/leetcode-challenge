<?php

namespace App\Tests;

use App\ShuffleArray;
use PHPUnit\Framework\TestCase;

class ShuffleArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testShuffle(array $nums, int $n, array $expected): void
    {
        $shuffleArray = new ShuffleArray();
        $result = $shuffleArray->shuffle($nums, $n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[2,5,1,3,4,7], 3, [2,3,5,4,1,7]],
            [[1,2,3,4,4,3,2,1], 4, [1,4,2,3,3,2,4,1]],
            [[1,1,2,2], 2, [1,2,1,2]]
        ];
    }
}
