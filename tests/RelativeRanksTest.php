<?php

namespace App\Tests;

use App\RelativeRanks;
use PHPUnit\Framework\TestCase;

class RelativeRanksTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindRelativeRanks(array $score, array $expected): void
    {
        $relativeRanks = new RelativeRanks();
        $result = $relativeRanks->findRelativeRanks($score);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[10,3,8,9,4], ["Gold Medal","5","Bronze Medal","Silver Medal","4"]],
            [[5,4,3,2,1], ["Gold Medal","Silver Medal","Bronze Medal","4","5"]],
        ];
    }
}
