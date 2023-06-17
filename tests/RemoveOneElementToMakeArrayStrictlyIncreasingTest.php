<?php

namespace App\Tests;

use App\RemoveOneElementToMakeArrayStrictlyIncreasing;
use PHPUnit\Framework\TestCase;

class RemoveOneElementToMakeArrayStrictlyIncreasingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanBeIncreasing(array $nums, bool $expected): void
    {
        $sut = new RemoveOneElementToMakeArrayStrictlyIncreasing();
        $this->assertEquals($expected, $sut->canBeIncreasing($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[1, 2, 10, 5, 7], true],
            [[2, 3, 1, 2], false],
            [[1, 1, 1], false],
        ];
    }
}
