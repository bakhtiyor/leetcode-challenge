<?php

namespace App\Tests;

use App\MoveZeroes;
use PHPUnit\Framework\TestCase;

class MoveZeroesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMoveZeroes(array $nums, array $expected): void
    {
        $moveZeroes = new MoveZeroes();
        $moveZeroes->moveZeroes($nums);

        $this->assertSame($expected, $nums);
    }

    public function dataProvider(): array
    {
        return [
            [[1,0,1], [1,1,0]],
            [[0,0,1], [1,0,0]],
            [[0,1,0,3,12], [1,3,12,0,0]],
            [[0], [0]]
        ];
    }
}
