<?php

namespace App\Tests;

use App\MonotonicArray;
use PHPUnit\Framework\TestCase;

class MonotonicArrayTest extends TestCase
{

    /** @dataProvider dataProvider */
    public function testIsMonotonic(array $nums, bool $expected): void
    {
        $monotonicArray = new MonotonicArray();
        $result = $monotonicArray->isMonotonic($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,2,3], true],
            [[6,5,4,4], true],
            [[1,3,2], false]
        ];
    }
}
