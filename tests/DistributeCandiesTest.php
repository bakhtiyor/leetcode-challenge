<?php

namespace App\Tests;

use App\DistributeCandies;
use PHPUnit\Framework\TestCase;

class DistributeCandiesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testDistributeCandies(int $expected, array $candyTypes): void
    {
        $distributeCandies = new DistributeCandies();
        $result = $distributeCandies->distributeCandies($candyTypes);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [3, [1,1,2,2,3,3]],
            [2, [1,1,2,3]],
            [1, [6,6,6,6]],
        ];
    }
}
