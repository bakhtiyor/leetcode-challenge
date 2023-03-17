<?php

namespace App\Tests;

use App\PassPillow;
use PHPUnit\Framework\TestCase;

class PassPillowTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testPassThePillow(int $n, int $time, int $expected): void
    {
        $passPillow = new PassPillow();
        $result = $passPillow->passThePillow($n, $time);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, 9, 4],
            [4, 5, 2],
            [3, 2, 3],
        ];
    }
}
