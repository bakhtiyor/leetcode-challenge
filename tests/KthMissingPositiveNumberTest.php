<?php

namespace App\Tests;

use App\KthMissingPositiveNumber;
use PHPUnit\Framework\TestCase;

class KthMissingPositiveNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindKthPositive(int $expected, array $arr, int $k): void
    {
        $kthMissingPositiveNumber = new KthMissingPositiveNumber();
        $result = $kthMissingPositiveNumber->findKthPositive($arr, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [9, [2,3,4,7,11], 5],
            [6, [1,2,3,4], 2],
        ];
    }
}
