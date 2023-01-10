<?php

namespace App\Tests;

use App\JumpGame;
use PHPUnit\Framework\TestCase;

class JumpGameTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCanJump(array $nums, bool $expected): void
    {
        $jumpGame = new JumpGame();
        $result = $jumpGame->canJump($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,2,1,0,4], false],
            [[0,2,3], false],
            [[1,2,3], true],
            [[1], true],
            [[2,3,1,1,4], true],
        ];
    }
}
