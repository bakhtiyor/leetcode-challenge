<?php

namespace App\Tests;

use App\WordPattern;
use PHPUnit\Framework\TestCase;

class WordPatternTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testWordPattern(string $pattern, string $str, bool $expected): void
    {
        $wordPattern = new WordPattern();
        $this->assertEquals($expected, $wordPattern->wordPattern($pattern, $str));
    }

    public function dataProvider(): array
    {
        return [
            [
                'pattern' => 'abba',
                'str' => 'dog cat cat dog',
                'expected' => true,
            ],
            [
                'pattern' => 'abba',
                'str' => 'dog cat cat fish',
                'expected' => false,
            ],
            [
                'pattern' => 'aaaa',
                'str' => 'dog cat cat dog',
                'expected' => false,
            ],
        ];
    }
}
