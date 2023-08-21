<?php

namespace App\Tests;

use App\MaximumRepeatingSubstring;
use PHPUnit\Framework\TestCase;

class MaximumRepeatingSubstringTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxRepeating(string $sequence, string $word, int $expected): void
    {
        $this->assertEquals($expected, (new MaximumRepeatingSubstring())->maxRepeating($sequence, $word));
    }

    public function dataProvider(): array
    {
        return [
            ['ababc', 'ab', 2],
            ['ababc', 'ba', 1],
            ['ababc', 'ac', 0],
        ];
    }
}
