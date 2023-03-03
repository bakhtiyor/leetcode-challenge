<?php

namespace App\Tests;

use App\FindIndexOfFirstOccurrenceInString;
use PHPUnit\Framework\TestCase;

class FindIndexOfFirstOccurrenceInStringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testStrStr(int $expected, string $haystack, string $needle): void
    {
        $findIndexOfFirstOccurrenceInString = new FindIndexOfFirstOccurrenceInString();
        $result = $findIndexOfFirstOccurrenceInString->strStr($haystack, $needle);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [0, 'sadbutsad', 'sad', ],
            [-1, 'leetcode', 'leeto'],
        ];
    }
}
