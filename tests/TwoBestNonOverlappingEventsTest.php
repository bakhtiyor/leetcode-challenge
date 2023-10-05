<?php

namespace App\Tests;

use App\TwoBestNonOverlappingEvents;
use PHPUnit\Framework\TestCase;

class TwoBestNonOverlappingEventsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxTwoEvents(array $events, int $expected): void
    {
        $twoBestNonOverlappingEvents = new TwoBestNonOverlappingEvents();
        $this->assertEquals($expected, $twoBestNonOverlappingEvents->maxTwoEvents($events));
    }

    public function dataProvider(): array
    {
        return [
            [
                [[1, 3, 2], [4, 5, 2], [2, 4, 3]],
                4,
            ],
            [
                [[1, 3, 2], [4, 5, 2], [1, 5, 5]],
                5,
            ],
            [
                [[1, 5, 3], [1, 5, 1], [6, 6, 5]],
                8,
            ],
        ];
    }
}
