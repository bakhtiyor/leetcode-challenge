<?php

namespace App\Tests;

use App\CalculateDelayedArrivalTime;
use PHPUnit\Framework\TestCase;

class CalculateDelayedArrivalTimeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindDelayedArrivalTime(int $arrivalTime, int $delayedTime, int $expected): void
    {
        $calculateDelayedArrivalTime = new CalculateDelayedArrivalTime();
        $this->assertEquals(
            $expected,
            $calculateDelayedArrivalTime->findDelayedArrivalTime($arrivalTime, $delayedTime)
        );
    }

    public function dataProvider(): array
    {
        return [
            [15, 5, 20],
            [13, 11, 0],
        ];
    }
}
