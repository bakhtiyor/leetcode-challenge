<?php

namespace App\Tests;

use App\CountDaysSpentTogether;
use PHPUnit\Framework\TestCase;

class CountDaysSpentTogetherTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountDaysTogether(
        string $arriveAlice,
        string $leaveAlice,
        string $arriveBob,
        string $leaveBob,
        int $expected
    ): void {
        $countDaysSpentTogether = new CountDaysSpentTogether();
        $this->assertEquals($expected, $countDaysSpentTogether->countDaysTogether(
            $arriveAlice,
            $leaveAlice,
            $arriveBob,
            $leaveBob
        ));
    }

    public function dataProvider(): array
    {
        return [
            ['08-15', '08-18', '08-16', '08-19', 3],
            ['10-01', '10-31', '11-01', '12-31', 0],
        ];
    }
}
