<?php

namespace App\Tests;

use App\TotalDistanceTraveled;
use PHPUnit\Framework\TestCase;

class TotalDistanceTraveledTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDistanceTraveled(int $mainTank, int $additionalTank, int $expected): void
    {
        $totalDistanceTraveled = new TotalDistanceTraveled();
        $this->assertEquals($expected, $totalDistanceTraveled->distanceTraveled($mainTank, $additionalTank));
    }

    public function dataProvider(): array
    {
        return [
            [5, 10, 60],
            [1, 2, 10]
        ];
    }
}
