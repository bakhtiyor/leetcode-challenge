<?php

namespace App\Tests;

use App\TakeGiftsFromRichestPile;
use PHPUnit\Framework\TestCase;

class TakeGiftsFromRichestPileTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testPickGifts(array $gifts, int $k, int $expected): void
    {
        $takeGiftsFromRichestPile = new TakeGiftsFromRichestPile();
        $this->assertEquals($expected, $takeGiftsFromRichestPile->pickGifts($gifts, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[25,64,9,4,100], 4, 29],
            [[1,1,1,1], 4, 4],
        ];
    }
}
