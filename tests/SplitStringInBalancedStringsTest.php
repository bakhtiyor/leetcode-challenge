<?php

namespace App\Tests;

use App\SplitStringInBalancedStrings;
use PHPUnit\Framework\TestCase;

class SplitStringInBalancedStringsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testBalancedStringSplit(string $str, int $expected): void
    {
        $this->assertEquals($expected, (new SplitStringInBalancedStrings())->balancedStringSplit($str));
    }

    public function dataProvider(): array
    {
        return [
            ['RLRRLLRLRL', 4],
            ['RLRRRLLRLL', 2],
            ['LLLLRRRR', 1],
        ];
    }
}
