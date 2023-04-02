<?php

namespace App\Tests;

use App\DetermineColorOfChessboardSquare;
use PHPUnit\Framework\TestCase;

class DetermineColorOfChessboardSquareTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSquareIsWhite(string $coordinates, bool $expected): void
    {
        $determineColorOfChessboardSquare = new DetermineColorOfChessboardSquare();
        $this->assertEquals($expected, $determineColorOfChessboardSquare->squareIsWhite($coordinates));
    }

    public function dataProvider(): array
    {
        return [
            ['a1', false],
            ['h3', true],
            ['c7', false],
        ];
    }
}
