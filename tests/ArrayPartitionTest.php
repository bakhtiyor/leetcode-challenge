<?php

namespace App\Tests;

use App\ArrayPartition;
use PHPUnit\Framework\TestCase;

class ArrayPartitionTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testArrayPairSum(int $expected, array $nums): void
    {
        $arrayPartition = new ArrayPartition();
        $result = $arrayPartition->arrayPairSum($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, [1,4,3,2]],
            [9, [6,2,6,5,1,2]],
        ];
    }
}
