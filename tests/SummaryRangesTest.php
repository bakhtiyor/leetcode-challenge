<?php

namespace App\Tests;

use App\SummaryRanges;
use PHPUnit\Framework\TestCase;

class SummaryRangesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSummaryRanges(array $nums, array $expected): void
    {
        $summaryRanges = new SummaryRanges();
        $result = $summaryRanges->summaryRanges($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[],[]],
            [[0,1,2,4,5,7], ["0->2","4->5","7"]],
            [[0,2,3,4,6,8,9], ["0","2->4","6","8->9"]],
        ];
    }
}
