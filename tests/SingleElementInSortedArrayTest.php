<?php

namespace App\Tests;

use App\SingleElementInSortedArray;
use PHPUnit\Framework\TestCase;

class SingleElementInSortedArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSingleNonDuplicate(int $expected, array $numbers): void
    {
        $singleElementInSortedArray = new SingleElementInSortedArray();
        $result = $singleElementInSortedArray->singleNonDuplicate($numbers);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [2, [1,1,2]],
            [1, [1]],
            [2, [1,1,2,3,3,4,4,8,8]],
            [10, [3,3,7,7,10,11,11]],
        ];
    }
}
