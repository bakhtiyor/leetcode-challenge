<?php

namespace App\Tests;

use App\BestPokerHand;
use PHPUnit\Framework\TestCase;

class BestPokerHandTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testBestHand(array $ranks, array $suits, string $expected): void
    {
        $obj = new BestPokerHand();
        $this->assertEquals($expected, $obj->bestHand($ranks, $suits));
    }

    public function dataProvider(): array
    {
        return [
            [[13,2,3,1,9], ["a","a","a","a","a"], "Flush"],
            [[4,4,2,4,4], ["d","a","a","b","c"], "Three of a Kind"],
            [[10,10,2,12,9], ["a","b","c","a","d"], "Pair"],
        ];
    }
}
