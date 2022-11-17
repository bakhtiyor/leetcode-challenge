<?php

namespace App\Tests;

use App\MissingNumber;
use PHPUnit\Framework\TestCase;

class MissingNumberTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testMissingNumber(array $nums, int $expected): void
    {
        $missingNumber = new MissingNumber();
        $result = $missingNumber->missingNumber($nums);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,0,1], 2],
            [[0,1], 2],
            [[9,6,4,2,3,5,7,0,1], 8]
        ];
    }
}
