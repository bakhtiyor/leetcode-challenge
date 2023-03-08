<?php

namespace App\Tests;

use App\MaximumNumberOfBalloons;
use PHPUnit\Framework\TestCase;

class MaximumNumberOfBalloonsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMaxNumberOfBalloons(string $text, int $expected): void
    {
        $maximumNumberOfBalloons = new MaximumNumberOfBalloons();
        $result = $maximumNumberOfBalloons->maxNumberOfBalloons($text);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['nlaebolko', 1],
            ['loonbalxballpoon', 2],
            ['leetcode', 0],
        ];
    }
}
