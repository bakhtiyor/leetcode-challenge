<?php

namespace App\Tests;

use App\FruitIntoBaskets;
use PHPUnit\Framework\TestCase;

class FruitIntoBasketsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testTotalFruit(array $fruits, int $expected): void
    {
        $fruitIntoBaskets = new FruitIntoBaskets();
        $result = $fruitIntoBaskets->totalFruit($fruits);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[1,2,1], 3],
            [[0,1,2,2], 3],
            [[1,2,3,2,2], 4]
        ];
    }
}
