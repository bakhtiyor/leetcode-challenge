<?php

namespace App\Tests;

use App\RotateArray;
use PHPUnit\Framework\TestCase;

class RotateArrayTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRotate(array $nums, int $k, array $expected): void
    {
        $rotateArray = new RotateArray();
        $rotateArray->rotate($nums, $k);

        $this->assertSame($expected, $nums);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2], 3, [2,1]],
            [[-1], 2, [-1]],
            [[1,2,3,4,5,6,7], 3, [5,6,7,1,2,3,4]],
            [[-1,-100,3,99], 2, [3,99,-1,-100]]
        ];
    }

}
