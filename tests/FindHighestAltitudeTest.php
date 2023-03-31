<?php

namespace App\Tests;

use App\FindHighestAltitude;
use PHPUnit\Framework\TestCase;

class FindHighestAltitudeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testLargestAltitude(array $gain, int $expected): void
    {
        $findHighestAltitude = new FindHighestAltitude();
        $this->assertEquals($expected, $findHighestAltitude->largestAltitude($gain));
    }

    public function dataProvider(): array
    {
        return [
            [[-5,1,5,0,-7], 1],
            [[-4,-3,-2,-1,4,3,2], 0],
        ];
    }
}
