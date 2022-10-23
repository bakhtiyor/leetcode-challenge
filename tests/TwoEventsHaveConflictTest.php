<?php

namespace App\Tests;

use App\TwoEventsHaveConflict;
use PHPUnit\Framework\TestCase;

class TwoEventsHaveConflictTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testHaveConflict(array $event1, array $event2, bool $expected): void
    {
        $twoEventsHaveConflict = new TwoEventsHaveConflict();
        $result = $twoEventsHaveConflict->haveConflict($event1, $event2);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [
                ["01:37","14:20"],
                ["05:06","06:17"],
                true
            ],
            [
                ["14:13","22:08"],
                ["02:40","08:08"],
                false
            ],
            [
                ["01:15","02:00"],
                ["02:00","03:00"],
                true
            ],
            [
                ["01:00","02:00"],
                ["01:20","03:00"],
                true
            ],
            [
                ["10:00","11:00"],
                ["14:00","15:00"],
                false
            ]
        ];
    }
}
