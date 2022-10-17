<?php

namespace App\Tests;

use App\RemoveElement;
use PHPUnit\Framework\TestCase;

class RemoveElementTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testRemoveElement(array $nums, int $val, int $expected): void
    {
        $removeElement = new RemoveElement();
        $result = $removeElement->removeElement($nums, $val);
        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[3,2,2,3], 3, 2],
            [[0,1,2,2,3,0,4,2], 2, 5],
        ];
    }
}
