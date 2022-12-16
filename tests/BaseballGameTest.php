<?php

namespace App\Tests;

use App\BaseballGame;
use PHPUnit\Framework\TestCase;

class BaseballGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCalPoints(array $operations, int $expected): void
    {
        $baseballGame = new BaseballGame();
        $result = $baseballGame->calPoints($operations);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [["5","2","C","D","+"], 30],
            [["5","-2","4","C","D","9","+","+"], 27],
            [["1","C"], 0]
        ];
    }
}
