<?php

namespace App\Tests;

use App\SquaresOfSortedArray;
use PHPUnit\Framework\TestCase;

class SquaresOfSortedArrayTest extends TestCase
{
    /** @dataProvider sortedSquaresDataProvider */
    public function testSortedSquares(array $nums, array $expected): void
    {
        $squaresOfSortedArray = new SquaresOfSortedArray();
        $result = $squaresOfSortedArray->sortedSquares($nums);

        $this->assertSame($expected, $result);
    }

    public function sortedSquaresDataProvider(): array
    {
        return [
            [[-4,-1,0,3,10], [0,1,9,16,100]],
            [[-7,-3,2,3,11], [4,9,9,49,121]]
        ];
    }
}
