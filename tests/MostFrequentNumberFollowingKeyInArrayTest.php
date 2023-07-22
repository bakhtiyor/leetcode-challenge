<?php

namespace App\Tests;

use App\MostFrequentNumberFollowingKeyInArray;
use PHPUnit\Framework\TestCase;

class MostFrequentNumberFollowingKeyInArrayTest extends TestCase
{
    /** @dataProvider dataProvider  */
    public function testMostFrequent(array $nums, int $key, int $expected): void
    {
        $mostFrequentNumberFollowingKeyInArray = new MostFrequentNumberFollowingKeyInArray();
        $this->assertEquals($expected, $mostFrequentNumberFollowingKeyInArray->mostFrequent($nums, $key));
    }

    public function dataProvider(): array
    {
        return [
            [[1,100,200,1,100], 1, 100],
            [[2,2,2,2,3], 2, 2]
        ];
    }
}
