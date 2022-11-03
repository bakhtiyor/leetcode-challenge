<?php

namespace App\Tests;

use App\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSearch(array $nums, int $target, int $expected): void
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search($nums, $target);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[5], 5, 0],
            [[-1,0,3,5,9,12,20], -1, 0],
            [[-1,0,3,5,9,12], 9, 4],
            [[-1,0,3,5,9,12], 2, -1],
        ];
    }
}
