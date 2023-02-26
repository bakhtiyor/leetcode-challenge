<?php

namespace App\Tests;

use App\JewelsAndStones;
use PHPUnit\Framework\TestCase;

class JewelsAndStonesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testNumJewelsInStones(int $expected, string $jewels, string $stones): void
    {
        $jewelsAndStones = new JewelsAndStones();
        $result = $jewelsAndStones->numJewelsInStones($jewels, $stones);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [3, 'aA', 'aAAbbbb'],
            [0, 'z', 'ZZ'],
        ];
    }
}
