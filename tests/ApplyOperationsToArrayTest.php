<?php

namespace App\Tests;

use App\ApplyOperationsToArray;
use PHPUnit\Framework\TestCase;

class ApplyOperationsToArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testApplyOperations(array $nums, array $expected): void
    {
        $applyOperationsToArray = new ApplyOperationsToArray();
        $this->assertEquals($expected, $applyOperationsToArray->applyOperations($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 2, 1, 1, 0], [1, 4, 2, 0, 0, 0]],
            [[0, 1], [1, 0]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10], [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10], [1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 0]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10], [1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 10, 0]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10], [1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 20, 0, 0]],
            [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 10], [1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 20, 10, 0, 0]]
        ];
    }
}
