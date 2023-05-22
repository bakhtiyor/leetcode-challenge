<?php

namespace App\Tests;

use App\CountOfMatchesInTournament;
use PHPUnit\Framework\TestCase;

class CountOfMatchesInTournamentTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumberOfMatches(int $n, int $expected): void
    {
        $sut = new CountOfMatchesInTournament();
        $this->assertEquals($expected, $sut->numberOfMatches($n));
    }

    public function dataProvider(): array
    {
        return [
            [7, 6],
            [14, 13]
        ];
    }
}
