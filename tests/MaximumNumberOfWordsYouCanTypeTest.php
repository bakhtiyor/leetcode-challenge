<?php

namespace App\Tests;

use App\MaximumNumberOfWordsYouCanType;
use PHPUnit\Framework\TestCase;

class MaximumNumberOfWordsYouCanTypeTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanBeTypedWords(string $text, string $brokenLetters, int $expected): void
    {
        $sut = new MaximumNumberOfWordsYouCanType();
        $this->assertEquals($expected, $sut->canBeTypedWords($text, $brokenLetters));
    }

    public function dataProvider(): array
    {
        return [
            [
                'text' => 'hello world',
                'brokenLetters' => 'ad',
                'expected' => 1,
            ],
            [
                'text' => 'leet code',
                'brokenLetters' => 'lt',
                'expected' => 1,
            ],
            [
                'text' => 'leet code',
                'brokenLetters' => 'e',
                'expected' => 0,
            ],
        ];
    }
}
