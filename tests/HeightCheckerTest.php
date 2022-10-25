<?php

namespace App\Tests;

use App\HeightChecker;
use PHPUnit\Framework\TestCase;

class HeightCheckerTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testHeightChecker(array $heights, int $expected): void
    {
        $heightChecker = new HeightChecker();
        $result = $heightChecker->heightChecker($heights);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,1,4,2,1,3], 3],
            [[5,1,2,3,4], 5],
            [[1,2,3,4,5], 0]
        ];
    }
}
