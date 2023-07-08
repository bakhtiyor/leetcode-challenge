<?php

namespace App\Tests;

use App\LargestPositiveIntegerThatExistsWithItsNegative;
use PHPUnit\Framework\TestCase;

class LargestPositiveIntegerThatExistsWithItsNegativeTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testFindMaxK(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new LargestPositiveIntegerThatExistsWithItsNegative())->findMaxK($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[-1, 2, -3, 3], 3],
            [[-1, 10, 6, 7, -7, 1], 7],
            [[-10, 8, 6, 7, -2, -3], -1],
        ];
    }
}
