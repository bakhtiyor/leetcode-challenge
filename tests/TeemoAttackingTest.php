<?php

namespace App\Tests;

use App\TeemoAttacking;
use PHPUnit\Framework\TestCase;

class TeemoAttackingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testFindPoisonedDuration(int $expected, array $timeSeries, int $duration): void
    {
        $teemoAttacking = new TeemoAttacking();
        $result = $teemoAttacking->findPoisonedDuration($timeSeries, $duration);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, [1, 4], 2],
            [3, [1, 2], 2],
        ];
    }
}
