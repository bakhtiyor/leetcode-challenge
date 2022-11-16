<?php

namespace App\Tests;

use App\GuessNumber;
use App\library\NumberGenerator;
use PHPUnit\Framework\TestCase;

class GuessNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGuessNumber(int $n, int $pick, int $expected): void
    {
        $guessNumber = new GuessNumber();
        $guessNumber->setNumber($pick);
        $result = $guessNumber->guessNumber($n);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [10, 6, 6],
            [1, 1, 1],
            [2, 1, 1]
        ];
    }
}
