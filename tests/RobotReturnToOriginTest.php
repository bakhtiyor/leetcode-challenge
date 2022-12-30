<?php

namespace App\Tests;

use App\RobotReturnToOrigin;
use PHPUnit\Framework\TestCase;

class RobotReturnToOriginTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testJudgeCircle(string $moves, bool $expected): void
    {
        $robotReturnToOrigin = new RobotReturnToOrigin();
        $result = $robotReturnToOrigin->judgeCircle($moves);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            ['UD', true],
            ['LL', false]
        ];
    }
}
