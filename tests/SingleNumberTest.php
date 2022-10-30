<?php

namespace App\Tests;

use App\SingleNumber;
use PHPUnit\Framework\TestCase;

class SingleNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSingleNumber(array $nums, int $expected): void
    {
        $singleNumber = new SingleNumber();
        $result = $singleNumber->singleNumber($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[2,2,1], 1],
            [[4,1,2,1,2], 4],
            [[1], 1]
        ];
    }
}
