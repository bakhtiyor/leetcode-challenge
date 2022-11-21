<?php

namespace App\Tests;

use App\PascalTriangleII;
use PHPUnit\Framework\TestCase;

class PascalTriangleIITest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGenerate(int $rowIndex, array $expected): void
    {
        $pascalTriangle = new PascalTriangleII();
        $result = $pascalTriangle->getRow($rowIndex);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [3, [1,3,3,1]],
            [0, [1]],
            [1, [1,1]],
        ];
    }
}
