<?php

namespace App\Tests;

use App\CheckIfEveryRowAndColumnContainsAllNumbers;
use PHPUnit\Framework\TestCase;

class CheckIfEveryRowAndColumnContainsAllNumbersTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckValid(array $matrix, bool $expected): void
    {
        $sut = new CheckIfEveryRowAndColumnContainsAllNumbers();
        $this->assertEquals($expected, $sut->checkValid($matrix));
    }

    public function dataProvider(): array
    {
        return [
            [
                'matrix' => [[1, 2, 3], [3, 1, 2], [2, 3, 1]],
                'expected' => true,
            ],
            [
                'matrix' => [[1, 1, 1], [1, 2, 3], [1, 2, 3]],
                'expected' => false,
            ],
        ];
    }
}
