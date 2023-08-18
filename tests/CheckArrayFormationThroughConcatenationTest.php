<?php

namespace App\Tests;

use App\CheckArrayFormationThroughConcatenation;
use PHPUnit\Framework\TestCase;

class CheckArrayFormationThroughConcatenationTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanFormArray(array $arr, array $pieces, bool $expected): void
    {
        $this->assertEquals($expected, (new CheckArrayFormationThroughConcatenation())->canFormArray($arr, $pieces));
    }

    public function dataProvider(): array
    {
        return [
            [[15, 88], [[88], [15]], true],
            [[49, 18, 16], [[16, 18, 49]], false],
            [[91, 4, 64, 78], [[78], [4, 64], [91]], true],
        ];
    }
}
