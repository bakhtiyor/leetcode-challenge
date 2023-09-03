<?php

namespace App\Tests;

use App\ExpressiveWords;
use PHPUnit\Framework\TestCase;

class ExpressiveWordsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testExpressiveWords(string $str, array $words, int $expected): void
    {
        $this->assertEquals($expected, (new ExpressiveWords())->expressiveWords($str, $words));
    }

    public function dataProvider(): array
    {
        return [
            ['heeellooo', ['hello', 'hi', 'helo'], 1],
            ['zzzzzyyyyy', ['zzyy', 'zy', 'zyy'], 3],
        ];
    }
}
