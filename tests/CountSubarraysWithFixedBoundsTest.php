<?php

namespace App\Tests;

use App\CountSubarraysWithFixedBounds;
use PHPUnit\Framework\TestCase;

class CountSubarraysWithFixedBoundsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountSubarrays(int $expected, array $nums, int $minK, int $maxK): void
    {
        $countSubarraysWithFixedBounds = new CountSubarraysWithFixedBounds();
        $result = $countSubarraysWithFixedBounds->countSubarrays($nums, $minK, $maxK);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [2, [1,3,5,2,7,5], 1, 5],
            [10, [1,1,1,1], 1, 1],
        ];
    }
}
