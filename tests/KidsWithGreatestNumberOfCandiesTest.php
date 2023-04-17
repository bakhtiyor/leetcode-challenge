<?php

namespace App\Tests;

use App\KidsWithGreatestNumberOfCandies;
use PHPUnit\Framework\TestCase;

class KidsWithGreatestNumberOfCandiesTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testKidsWithCandies(array $candies, int $extraCandies, array $expected): void
    {
        $kidsWithGreatestNumberOfCandies = new KidsWithGreatestNumberOfCandies();
        $this->assertEquals($expected, $kidsWithGreatestNumberOfCandies->kidsWithCandies($candies, $extraCandies));
    }

    public function dataProvider(): array
    {
        return [
            [[2, 3, 5, 1, 3], 3, [true, true, true, false, true]],
            [[4, 2, 1, 1, 2], 1, [true, false, false, false, false]],
            [[12, 1, 12], 10, [true, false, true]],
        ];
    }
}
