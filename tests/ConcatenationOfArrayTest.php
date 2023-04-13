<?php

namespace App\Tests;

use App\ConcatenationOfArray;
use PHPUnit\Framework\TestCase;

class ConcatenationOfArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGetConcatenation(array $nums, array $expected): void
    {
        $concatenationOfArray = new ConcatenationOfArray();
        $this->assertSame($expected, $concatenationOfArray->getConcatenation($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 1], [1, 2, 1, 1, 2, 1]],
            [[1, 3, 2, 1], [1, 3, 2, 1, 1, 3, 2, 1]]
        ];
    }

}
