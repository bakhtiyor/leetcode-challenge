<?php

namespace App\Tests;

use App\SplitStringsBySeparator;
use PHPUnit\Framework\TestCase;

class SplitStringsBySeparatorTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testSplitWordsBySeparator(array $words, string $separator, array $expected): void
    {
        $sut = new SplitStringsBySeparator();
        $this->assertEquals($expected, $sut->splitWordsBySeparator($words, $separator));
    }

    public function dataProvider(): array
    {
        return [
            [
                'words' => ['one.two.three', 'four.five', 'six'],
                'separator' => '.',
                'expected' => ['one', 'two', 'three', 'four', 'five', 'six'],
            ],
            [
                'words' => ['$easy$', '$problem$'],
                'separator' => '$',
                'expected' => ['easy', 'problem'],
            ],
            [
                'words' => ['|||'],
                'separator' => '|',
                'expected' => [],
            ],
        ];
    }
}
