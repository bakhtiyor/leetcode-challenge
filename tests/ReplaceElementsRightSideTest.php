<?php

namespace App\Tests;

use App\ReplaceElementsRightSide;
use PHPUnit\Framework\TestCase;

class ReplaceElementsRightSideTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testReplaceElements(array $arr, array $expected)
    {
        $replaceElementsRightSide = new ReplaceElementsRightSide();
        $result = $replaceElementsRightSide->replaceElements($arr);

        $this->assertSame($expected, $result);
    }

    public function dataProvider(): array
    {
        return [
            [[17,18,5,4,6,1], [18,6,6,6,1,-1]],
            [[400], [-1]]
        ];
    }
}
