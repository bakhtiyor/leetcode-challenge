<?php

namespace App\Tests;

use App\PlusOne;
use PHPUnit\Framework\TestCase;

class PlusOneTest extends TestCase
{
    /** @dataProvider plusOneDataProvider */
    public function testPlusOne(array $digits, array $expected): void
    {
        $plusOne = new PlusOne();
        $result = $plusOne->plusOne($digits);
        $this->assertSame($expected, $result);
    }

    public function plusOneDataProvider(): array
    {
        return [
            [[9], [1,0]],
            [[1,2,3], [1,2,4]],
            [[4,3,2,1], [4,3,2,2]],
        ];
    }
}
