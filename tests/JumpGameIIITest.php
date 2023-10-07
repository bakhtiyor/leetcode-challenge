<?php

namespace App\Tests;

use App\JumpGameIII;
use PHPUnit\Framework\TestCase;

class JumpGameIIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanReach(array $arr, int $start, bool $expected): void
    {
        $jumpGameIII = new JumpGameIII();
        $this->assertEquals($expected, $jumpGameIII->canReach($arr, $start));
    }

    public function dataProvider(): array
    {
        return [
            [[4, 2, 3, 0, 3, 1, 2], 5, true],
            [[4, 2, 3, 0, 3, 1, 2], 0, true],
            [[3, 0, 2, 1, 2], 2, false],
        ];
    }
}
