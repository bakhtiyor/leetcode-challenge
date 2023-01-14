<?php

namespace App\Tests;

use App\Combinations;
use PHPUnit\Framework\TestCase;

class CombinationsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCombine(int $n, int $k, array $expected): void
    {
        $combinations = new Combinations();
        $result = $combinations->combine($n, $k);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [4, 2, [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]],
            [1, 1, [[1]]]
        ];
    }
}
