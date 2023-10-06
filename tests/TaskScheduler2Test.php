<?php

namespace App\Tests;

use App\TaskScheduler2;
use PHPUnit\Framework\TestCase;

class TaskScheduler2Test extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTaskSchedulerII(array $tasks, int $space, int $expected): void
    {
        $obj = new TaskScheduler2();
        $this->assertEquals($expected, $obj->taskSchedulerII($tasks, $space));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 1, 2, 3, 1], 3, 9],
            [[5, 8, 8, 5], 2, 6]
        ];
    }
}
