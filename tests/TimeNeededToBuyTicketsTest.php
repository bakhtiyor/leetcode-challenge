<?php

namespace App\Tests;

use App\TimeNeededToBuyTickets;
use PHPUnit\Framework\TestCase;

class TimeNeededToBuyTicketsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTimeRequiredToBuy(array $tickets, int $k, int $expected): void
    {
        $timeRequiredToBuy = new TimeNeededToBuyTickets();
        $this->assertEquals($expected, $timeRequiredToBuy->timeRequiredToBuy($tickets, $k));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 3, 2], 2, 6],
            [[5, 1, 1, 1], 0, 8],
        ];
    }
}
