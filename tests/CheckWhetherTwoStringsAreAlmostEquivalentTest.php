<?php

namespace App\Tests;

use App\CheckWhetherTwoStringsAreAlmostEquivalent;
use PHPUnit\Framework\TestCase;

class CheckWhetherTwoStringsAreAlmostEquivalentTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCheckAlmostEquivalent(string $word1, string $word2, bool $expected): void
    {
        $obj = new CheckWhetherTwoStringsAreAlmostEquivalent();
        $result = $obj->checkAlmostEquivalent($word1, $word2);
        $this->assertEquals($result, $expected);
    }

    public function dataProvider(): array
    {
        return [
            ['aaaa', 'bccb', false],
            ['abcdeef', 'abaaacc', true],
            ['cccddabba', 'babababab', true]
        ];
    }
}
