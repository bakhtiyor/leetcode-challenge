<?php

namespace App\Tests;

use App\CountAndSay;
use App\CountElementsWithStrictlySmallerAndGreaterElements;
use PHPUnit\Framework\TestCase;

class CountElementsWithStrictlySmallerAndGreaterElementsTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testCountElements(array $nums, int $expected): void
    {
        $this->assertEquals($expected, (new CountElementsWithStrictlySmallerAndGreaterElements())->countElements($nums));
    }

    public function dataProvider(): array
    {
        return [
            [[11, 7, 2, 15], 2],
            [[-3, 3, 3, 90], 2],
        ];
    }
}
