<?php

namespace App\Tests;

use App\CourseScheduleII;
use PHPUnit\Framework\TestCase;

class CourseScheduleIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindOrder(int $numCourses, array $prerequisites, array $expected): void
    {
        $sut = new CourseScheduleII();
        $this->assertEquals($expected, $sut->findOrder($numCourses, $prerequisites));
    }

    public function dataProvider(): array
    {
        return [
            [
                2,
                [[1, 0]],
                [0, 1],
            ],
            [
                4,
                [[1, 0], [2, 0], [3, 1], [3, 2]],
                [0, 1, 2, 3],
            ],
            [
                1,
                [],
                [0],
            ],
        ];
    }
}
