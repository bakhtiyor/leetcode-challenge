<?php

namespace App\Tests;

use App\FlipStringToMonotoneIncreasing;
use PHPUnit\Framework\TestCase;

class FlipStringToMonotoneIncreasingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinFlipsMonoIncr(string $str, int $expected): void
    {
        $flipStringToMonotoneIncreasing = new FlipStringToMonotoneIncreasing();
        $result = $flipStringToMonotoneIncreasing->minFlipsMonoIncr($str);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['00110', 1],
            ['010110', 2],
            ['00011000', 2]
        ];
    }
}
