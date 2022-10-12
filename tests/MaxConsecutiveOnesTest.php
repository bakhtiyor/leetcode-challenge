<?php

namespace App\Tests;

use App\MaxConsecutiveOnes;
use PHPUnit\Framework\TestCase;

class MaxConsecutiveOnesTest extends TestCase
{
    /** @dataProvider maxConsecutiveOnesDataProvider */
    public function testFindMaxConsecutiveOnes(array $nums, int $expected): void
    {
        $maxConsecutiveOnes = new MaxConsecutiveOnes();
        $result = $maxConsecutiveOnes->findMaxConsecutiveOnes($nums);

        $this->assertEquals($expected, $result);
    }

    public function maxConsecutiveOnesDataProvider(): array
    {
        return [
            [[1,1,0,1,1,1], 3],
            [[1,0,1,1,0,1], 2]
        ];
    }
}
