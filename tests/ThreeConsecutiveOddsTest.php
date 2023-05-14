<?php

namespace App\Tests;

use App\ThreeConsecutiveOdds;
use PHPUnit\Framework\TestCase;

class ThreeConsecutiveOddsTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testThreeConsecutiveOdds(array $arr, bool $expected): void
    {
        $threeConsecutiveOdds = new ThreeConsecutiveOdds();
        $this->assertEquals($expected, $threeConsecutiveOdds->threeConsecutiveOdds($arr));
    }

    public function dataProvider(): array
    {
        return [
            [[2,6,4,1], false],
            [[1,2,34,3,4,5,7,23,12], true]
        ];
    }
}
