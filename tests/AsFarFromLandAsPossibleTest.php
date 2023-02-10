<?php

namespace App\Tests;

use App\AsFarFromLandAsPossible;
use PHPUnit\Framework\TestCase;

class AsFarFromLandAsPossibleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxDistance(array $grid, int $expected): void
    {
        $asFarFromLandAsPossible = new AsFarFromLandAsPossible();
        $result = $asFarFromLandAsPossible->maxDistance($grid);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[[1,0,1],[0,0,0],[1,0,1]], 2],
            [[[1,0,0],[0,0,0],[0,0,0]], 4]
        ];
    }
}
