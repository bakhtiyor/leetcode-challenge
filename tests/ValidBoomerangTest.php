<?php

namespace App\Tests;

use App\ValidBoomerang;
use PHPUnit\Framework\TestCase;

class ValidBoomerangTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testIsBoomerang(array $points, bool $expected): void
    {
        $validBoomerang = new ValidBoomerang();
        $this->assertEquals($expected, $validBoomerang->isBoomerang($points));
    }

    public function dataProvider(): array
    {
        return [
            [
                'points' => [[1, 1], [2, 3], [3, 2]],
                'expected' => true
            ],
            [
                'points' => [[1, 1], [2, 2], [3, 3]],
                'expected' => false
            ],
            [
                'points' => [[1, 1], [1, 2], [1, 3]],
                'expected' => false
            ]
        ];
    }
}
