<?php

namespace App\Tests;

use App\MinMaxGame;
use PHPUnit\Framework\TestCase;

class MinMaxGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMinMaxGame(array $nums, int $expected): void
    {
        $minMaxGame = new MinMaxGame();
        $this->assertEquals($expected, $minMaxGame->minMaxGame($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 3, 5, 2, 4, 8, 2, 2], 1],
            [[3], 3],
        ];
    }
}
