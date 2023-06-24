<?php

namespace App\Tests;

use App\NeitherMinimumNorMaximum;
use PHPUnit\Framework\TestCase;

class NeitherMinimumNorMaximumTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindNonMinOrMax(array $nums, int $expected): void
    {
        $sut = new NeitherMinimumNorMaximum();
        $this->assertEquals($expected, $sut->findNonMinOrMax($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[3, 2, 1, 4], 3],
            [[1, 2], -1],
            [[2, 1, 3], 2],
        ];
    }
}
