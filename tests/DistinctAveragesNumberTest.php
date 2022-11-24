<?php

namespace App\Tests;

use App\DistinctAveragesNumber;
use PHPUnit\Framework\TestCase;

class DistinctAveragesNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDistinctAverages(array $nums, int $expected): void
    {
        $distinctAveragesNumber = new DistinctAveragesNumber();
        $result = $distinctAveragesNumber->distinctAverages($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[4,1,4,0,3,5], 2],
            [[1,100], 1]
        ];
    }
}
