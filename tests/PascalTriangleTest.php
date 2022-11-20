<?php

namespace App\Tests;

use App\PascalTriangle;
use PHPUnit\Framework\TestCase;

class PascalTriangleTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testGenerate(int $height, array $expected): void
    {
        $pascalTriangle = new PascalTriangle();
        $result = $pascalTriangle->generate($height);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [5, [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]],
            [1, [[1]]]
        ];
    }
}
