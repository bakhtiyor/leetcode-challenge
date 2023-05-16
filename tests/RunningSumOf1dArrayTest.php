<?php

namespace App\Tests;

use App\RunningSumOf1dArray;
use PHPUnit\Framework\TestCase;

class RunningSumOf1dArrayTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testRunningSum(array $nums, array $expected): void
    {
        $runningSumOf1dArray = new RunningSumOf1dArray();
        $this->assertEquals($expected, $runningSumOf1dArray->runningSum($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,3,4], [1,3,6,10]],
            [[1,1,1,1,1], [1,2,3,4,5]],
            [[3,1,2,10,1], [3,4,6,16,17]],
        ];
    }
}
