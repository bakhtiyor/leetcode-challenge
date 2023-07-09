<?php

namespace App\Tests;

use App\MinimumDistanceToTargetElement;
use PHPUnit\Framework\TestCase;

class MinimumDistanceToTargetElementTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param array $nums
     * @param int $target
     * @param int $start
     * @param int $expected
     */
    public function testGetMinDistance(array $nums, int $target, int $start, int $expected): void
    {
        $minimumDistanceToTargetElement = new MinimumDistanceToTargetElement();
        $this->assertEquals($expected, $minimumDistanceToTargetElement->getMinDistance($nums, $target, $start));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3, 4, 5], 5, 3, 1],
            [[1], 1, 0, 0],
            [[1, 1, 1, 1, 1, 1, 1, 1, 1, 1], 1, 0, 0],
        ];
    }


}
