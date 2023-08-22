<?php

namespace App\Tests;

use App\KthSmallestElementInSortedMatrix;
use PHPUnit\Framework\TestCase;

class KthSmallestElementInSortedMatrixTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testKthSmallest(array $matrix, int $k, int $expected): void
    {
        $this->assertEquals($expected, (new KthSmallestElementInSortedMatrix())->kthSmallest($matrix, $k));
    }

    public function dataProvider(): array
    {
        return [
            [
                'matrix' => [[1, 5, 9], [10, 11, 13], [12, 13, 15]],
                'k' => 8,
                'expected' => 13,
            ],
            [
                'matrix' => [[-5]],
                'k' => 1,
                'expected' => -5,
            ],
        ];
    }
}
