<?php

namespace App\Tests;

use App\MajorityElement;
use PHPUnit\Framework\TestCase;

class MajorityElementTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMajorityElement(array $nums, int $expected): void
    {
        $majorityElement = new MajorityElement();
        $result = $majorityElement->majorityElement($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,2,3], 3],
            [[2,2,1,1,1,2,2], 2]
        ];
    }
}
