<?php

namespace App\Tests;

use App\NumberOfStudentsDoingHomeworkAtGivenTime;
use PHPUnit\Framework\TestCase;

class NumberOfStudentsDoingHomeworkAtGivenTimeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testBusyStudent(array $startTime, array $entTime, int $queryTime, int $expeceted): void
    {
        $numberOfStudentsDoingHomeworkAtGivenTime = new NumberOfStudentsDoingHomeworkAtGivenTime();
        $this->assertEquals(
            $expeceted,
            $numberOfStudentsDoingHomeworkAtGivenTime->busyStudent($startTime, $entTime, $queryTime)
        );
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 3], [3, 2, 7], 4, 1],
            [[4], [4], 4, 1],
            [[4], [4], 5, 0],
            [[1, 1, 1, 1], [1, 3, 2, 4], 7, 0],
            [[9, 8, 7, 6, 5, 4, 3, 2, 1], [10, 10, 10, 10, 10, 10, 10, 10, 10], 5, 5],
        ];
    }
}
